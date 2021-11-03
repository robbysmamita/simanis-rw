<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('Auth');
        }
    }
    public function index()
    {
        $this->form_validation->set_rules(
            'nama_admin',
            'Nama',
            'required'
        );
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Dashboard";
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar');
            $this->load->view('layout/sidebar');
            $this->load->view('dashboard/index');
            $this->load->view('layout/footer');
        } else {
            $data = [
                'users_id' => $this->session->userdata('users_id'),
                'nama_siswa' => htmlspecialchars($this->input->post('nama_admin'))
            ];
            $this->db->insert('admin', $data);
        }
    }
    public function index1()
    {
        $data['title'] = "Dashboard";
        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar_guru');
        $this->load->view('dashboard/index1');
        $this->load->view('layout/footer');
    }
    public function index2()
    {
        $this->form_validation->set_rules(
            'nama_siswa',
            'Nama',
            'required'
        );
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Dashboard";
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar');
            $this->load->view('layout/sidebar_siswa');
            $this->load->view('dashboard/index2');
            $this->load->view('layout/footer');
        } else {
            $data = [
                'users_id' => $this->session->userdata('users_id'),
                'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa'))
            ];
            $this->db->insert('siswa', $data);
        }
    }
}