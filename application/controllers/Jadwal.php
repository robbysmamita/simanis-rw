<?php

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Datasiswa_model');
    }

    public function index()
    {
        $data['title'] = 'Data Siswa';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('Jadwal/index', $data);
        $this->load->view('layout/footer');
    }
    
}
