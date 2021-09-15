<?php

class Absensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('absensi_model');
    }
    public function index()
    {
        $data['title'] = 'Absensi Siswa';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('Absensi/absensisiswa', $data);
        $this->load->view('layout/footer');
    }
    public function tambah()
    {
    }
}
