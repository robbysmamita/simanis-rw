<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }

    public function index()
    {
        if ($this->session->userdata('role') == 'admin') {
            redirect('dashboard/index');
        } elseif ($this->session->userdata('role') == 'siswa') {
            redirect('dashboard/index1');
        } elseif ($this->session->userdata('role') == 'guru') {
            redirect('dashboard/index2');
        }

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Login';
            $this->load->view('layout/header', $data);
            // $this->load->view('layout/home/topbar');
            $this->load->view('auth/index');
            // $this->load->view('layout/home/footer');
        } else {
            $this->private_login();
            var_dump($this->private_login);
            die;
        }
    }

    private function private_login($email, $password)
    {

        if ($this->Auth_model->login_admin($email, $password) == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $users = $this->db->get_where('users', ['email' => $email])->row_array();

            if ($users) {
                if (password_verify($password, $users['password'])) {
                    unset($users['password']);
                    $data = [
                        'email' => $users['email'],
                        'nama' => $users['nama'],
                        '$users_id' => $users['id']
                    ];
                    $this->session->set_userdata($data);
                } else {
                    $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
                    <strong> email/Password salah </strong> </div>');
                    redirect('auth');
                }
            }
            $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
            <strong> email Tidak Ada </strong> </div>');
            redirect('auth');
        } elseif ($this->Auth_model->login_siswa($email, $password) == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $siswa = $this->db->get_where('siswa', ['email' => $email])->row_array();
            if ($siswa) {
                if (password_verify($password, $siswa['password'])) {
                    unset($users['password']);
                    $data = [
                        'email' => $siswa['email'],
                        'nama' => $siswa['nama'],
                        '$siswa_id' => $siswa['id']
                    ];
                    $this->session->set_userdata($data);
                } else {
                    $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
                    <strong> email/Password salah </strong> </div>');
                    redirect('auth');
                }
            }
            $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
            <strong> email Tidak Ada </strong> </div>');
            redirect('auth');
        } elseif ($this->session->userdata('role') == 'guru') {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $guru = $this->db->get_where('guru', ['email' => $email])->row_array();
            if ($guru) {
                if (password_verify($password, $guru['password'])) {
                    unset($guru['password']);
                    $data = [
                        'email' => $guru['email'],
                        'nama' => $guru['nama'],
                        '$kode_guru' => $guru['kode_guru']
                    ];
                    $this->session->set_userdata($data);
                } else {
                    $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
                    <strong> email/Password salah </strong> </div>');
                    redirect('auth');
                }
            }
            $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
            <strong> email Tidak Ada </strong> </div>');
            redirect('auth');
        }
        // $email = $this->input->post('email');
        // $password = $this->input->post('password');
        // $users = $this->db->get_where('users', ['email' => $email])->row_array();

        // if ($users) {
        //     if ($users['is_active'] == 1) {
        //         if (password_verify($password, $users['password'])) {
        //             unset($users['password']);
        //             $data = [
        //                 'email' => $users['email'],
        //                 'nama' => $users['nama'],
        //                 'role_id' => $users['role_id'],
        //                 'users_id' => $users['id']
        //             ];
        //             $this->session->set_userdata($data);

        //             if ($users['role_id'] == 'admin') {
        //                 redirect('dashboard/index');
        //             } elseif ($users['role_id'] == 'siswa') {
        //                 redirect('dashboard/index1');
        //             } else {
        //                 redirect('dashboard/index2');
        //             }
        //         } else {
        //             $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
        //             <strong> email/Password salah </strong> </div>');
        //             redirect('auth');
        //         }
        //     } else {
        //         $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
        //         <strong> email Tidak Aktif, Hubungi Admin!  </strong> </div>');
        //         redirect('auth');
        //     }
        // } else {
        //     $this->session->set_flashdata('users', '<div class="alert alert-danger mt-2 mb-2" role="alert">
        //     <strong> email Tidak Ada </strong> </div>');
        //     redirect('auth');
        //     // redirect('auth');
        // }
    }

    public function registration()
    {
        if ($this->session->userdata('role_id') == 'admin') {
            redirect('admin/dashboard');
        } elseif ($this->session->userdata('role_id') == 'siswa') {
            redirect('dashboard');
        } else {
            redirect('dashboard/index');
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
            'first_name',
            'first_name',
            'required',
            [
                'required' => 'Nama Harus Diisi'
            ]
        );

        $this->form_validation->set_rules(
            'last_name',
            'last_name',
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
            $data['title'] = 'Registrasi';
            $this->load->view('layout/header', $data);
            // $this->load->view('layout/topbar');
            $this->load->view('auth/registration');
            // $this->load->view('layout/footer');
        } else {
            date_default_timezone_set('Asia/Jakarta');
            $now = date('Y-m-d H:i:s');
            $data = [
                'email' => htmlspecialchars($this->input->post('email')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'first_name' => htmlspecialchars($this->input->post('first_name')),
                'last_name' => htmlspecialchars($this->input->post('last_name')),
                'role_id' => 'siswa',
                'is_active' => 1,
                'created_date' => $now
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('users', '<div class="alert alert-success mt-2 mb-2" role="alert">
			Registrasi users <strong> Berhasil! </strong> Silahkan Login </div>');
            redirect('Auth');
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
        redirect('Auth');
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
