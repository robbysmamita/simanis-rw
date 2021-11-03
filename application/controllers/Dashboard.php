<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
            $this->load->model('Kelas_model');
            $this->load->model('Jadwal_model');
        
        
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
		$data['kelas'] = $this->Kelas_model->getAllDataKelas($this->session->users_id);
		// $data['jadwal'] = $this->Jadwal_model->count($this->session->userdata('users_id'));
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
		//$data['posts'] = $this->model->index();
		$this->session->set_flashdata('dashboard');
       
	}
	
}

        // $this->form_validation->set_rules(
        //     'nama_siswa',
        //     'Nama',
        //     'required'
        // );
        // if ($this->form_validation->run() == FALSE) {
        //     $data['title'] = "Dashboard";
        //     $this->load->view('layout/header', $data);
        //     $this->load->view('layout/topbar');
        //     $this->load->view('layout/sidebar_siswa');
        //     $this->load->view('dashboard/index2');
        //     $this->load->view('layout/footer');
        // } else {
        //     $data = [
        //         'users_id' => $this->session->userdata('users_id'),
        //         'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa'))
        //     ];
        //     $this->db->insert('siswa', $data);
        // }
    
