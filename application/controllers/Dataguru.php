<?php

class Dataguru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Dataguru_model');
    }
    public function index()
    {
        $data['guru'] = $this->Dataguru_model->getAllDataGuru();
        $data['title'] = 'Data Guru';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('Dataguru/index', $data);
        $this->load->view('layout/footer');
    }
    public function tambah()
    {
        $this->form_validation->set_rules(
            'Nama_guru',
            'Nama guru',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'No_induk_guru',
            'No_induk_guru',
            'required',
            [
                'required' => 'Harus diisi'
            ]

        );
        $this->form_validation->set_rules(
            'Jenis_Kelamin',
            'Jenis Kelamin',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Data guru';
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('Dataguru/tambah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Dataguru_model->tambah();
            $this->session->flashdata('guru', 'Added');
            redirect('Dataguru');
        }
    }
    public function edit($kode_guru)
    {
        $this->form_validation->set_rules(
            'kode_guru',
            'kode guru',
            'required',
            [
                'required' => 'kode_guru'
            ]
        );
        $this->form_validation->set_rules(
            'nama_guru',
            'Nama guru',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'No_induk_guru',
            'No_induk_guru',
            'required',
            [
                'required' => 'Harus diisi'
            ]

        );
        $this->form_validation->set_rules(
            'Jenis_Kelamin',
            'Jenis Kelamin',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['guru'] = $this->Dataguru_model->getById($kode_guru);
            $data['title'] = 'Data guru';
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('Dataguru/edit', $data);
            $this->load->view('layout/header');
        } else {
            $this->Dataguru_model->edit();
            $this->session->set_flashdata('guru', 'Diubah');
            redirect('Dataguru');
        }
    }
    public function delete($kode_guru = null)
    {
    // var_dump($this->db->last_query())
        // var_dump($data['guru']);
        // die;
        $this->Dataguru_model->delete($kode_guru);
        $this->session->set_flashdata('guru', 'Dihapus');
        redirect('Dataguru');
    }
}
