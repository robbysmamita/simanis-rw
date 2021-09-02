<?php

class Kelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Kelas_model');
    }

    public function index()
    {
        $data['title'] = "Kelas";
        $data['kelas'] = $this->Kelas_model->getAllDataKelas();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar');
        $this->load->view('kelas/index', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'kelas',
            'Kelas',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'category',
            'Category',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Tambah Kelas";
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar');
            $this->load->view('layout/sidebar');
            $this->load->view('kelas/tambah');
            $this->load->view('layout/footer');
        } else {
            $this->Kelas_model->tambah();
            $this->session->set_flashdata('kelas', 'Added');
            redirect('kelas');
        }
    }
}
