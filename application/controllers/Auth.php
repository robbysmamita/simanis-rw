<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('role_id') == 1) {
            redirect('dashboard/index');
        } elseif ($this->session->userdata('role_id') == 2) {
            redirect('dashboard/index');
        }

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required',
            [
                'required' => 'Email Harus diisi'
            ]
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            [
                'required' => 'Password Harus diisi'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layout/header');
            // $this->load->view('layout/home/topbar');
            $this->load->view('auth/index');
            // $this->load->view('layout/home/footer');
        } else {
            $this->private_login();
        }
    }

    private function private_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $users = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($users) {
            if ($users['is_active'] == 1) {
                if (password_verify($password, $users['password'])) {
                    unset($users['password']);
                    $data = [
                        'email' => $users['email'],
                        'nama' => $users['nama'],
                        'role_id' => $users['role_id'],
                        'users_id' => $users['id']
                    ];
                    $this->session->set_userdata($data);

                    if ($users['role_id'] == 1) {
                        redirect('dashboard/index');
                    } else {
                        redirect('dashboard');
                    }
                } else {
                    $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
                    <strong> Username/Password salah </strong> </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
                <strong> Username Tidak Aktif, Hubungi Admin!  </strong> </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
            <strong> Username Tidak Ada </strong> </div>');
            redirect('masuk');
            // redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('role_id') == 1) {
            redirect('admin/dashboard');
        } elseif ($this->session->userdata('role_id') == 2) {
            redirect('dashboard');
        }
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|is_unique[users.email]|valid_email',
            [
                'required' => 'Email Harus Diisi',
                'is_unique' => 'Email Sudah terdaftar',
                'valid_email' => 'Harus berupa Email'
            ]
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            [
                'required' => 'Nama Harus Diisi'
            ]
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[6]|matches[password_confirm]',
            [
                'required' => 'Password Harus Diisi',
                'min_length[6]' => 'Minimal 6 Karakter',
                'matches' => 'Password tidak sama'
            ]
        );

        $this->form_validation->set_rules(
            'password_confirm',
            'Password',
            'required|trim|min_length[6]|matches[password]',
            [
                'required' => 'Konfirmasi Password Harus Diisi',
                'min_length[6]' => 'Minimal 6 Karakter',
                'matches' => 'Password tidak sama'
            ]
        );

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('layout/header');
            // $this->load->view('layout/home/topbar');
            $this->load->view('auth/registration');
            // $this->load->view('layout/home/footer');
        } else {
            date_default_timezone_set('Asia/Jakarta');
            $now = date('Y-m-d H:i:s');
            $data = [
                'email' => htmlspecialchars($this->input->post('email')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'role_id' => 2,
                'is_active' => 1,
                'created_date' => $now
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('users', '<div class="alert alert-success mt-2 mb-2" role="alert">
			Registrasi users <strong> Berhasil! </strong> Silahkan Login </div>');
            redirect('masuk');
            // redirect('auth');
        }
    }

    public function forgotpassword()
    {
        // $this->load->view('layout/home/header');
        // $this->load->view('layout/home/topbar');
        $this->load->view('auth/forgotpassword');
        // $this->load->view('layout/home/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('users_id');
        $this->session->all_userdata();
        $this->session->set_flashdata('users', '<div class="alert alert-success mb-2 mt-2" role="alert">
        Anda Berhasil <strong>Logout </strong> </div>');
        redirect('masuk');
        // redirect('auth');
    }

    public function blocked()
    {
        $data['title'] = 'Blocked Page';
        $this->load->view('layout/home/header', $data);
        $this->load->view('auth/blocked');
        $this->load->view('layout/home/footer');
    }
}
