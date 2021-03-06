<?php

class Datasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Datasiswa_model');
    }

    public function index()
    {
        $data['siswa'] = $this->Datasiswa_model->getAllDataSiswa();
        $data['title'] = 'Data Siswa';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('Datasiswa/index', $data);
        $this->load->view('layout/footer');
    }
    public function tambah()
    {
        $this->form_validation->set_rules(
            'Nama_Siswa',
            'Nama Siswa',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'No_induk_siswa',
            'No_induk_siswa',
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
        $this->form_validation->set_rules(
            'Alamat',
            'Alamat',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'email',
            'email',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'no_telp',
            'no_telp',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'no_telp_orangtua',
            'no_telp_orangtua',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Data Siswa';
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('Datasiswa/tambah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Datasiswa_model->tambah();
            $this->session->flashdata('siswa', 'Added');
            redirect('Datasiswa');
        }
    }
    public function edit($id)
    {
        $this->form_validation->set_rules(
            'id',
            'ID',
            'required',
            [
                'required' => 'ID'
            ]
        );
        $this->form_validation->set_rules(
            'nama_siswa',
            'nama_siswa',
            'required',
            [
                'required' => 'Masukkan Nama Baru!!'
            ]
        );
        $this->form_validation->set_rules(
            'No_induk_siswa',
            'No_induk_siswa',
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
        $this->form_validation->set_rules(
            'Alamat',
            'Alamat',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'email',
            'email',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'no_telp',
            'no_telp',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'no_telp_orangtua',
            'no_telp_orangtua',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['siswa'] = $this->Datasiswa_model->getById($id);
            // var_dump($data['siswa']);
            // die;
            $data['title'] = 'Data Siswa';
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('Datasiswa/edit', $data);
            $this->load->view('layout/header');
        } else {
            $this->Datasiswa_model->edit();
            // var_dump($this->db->last_query());
            // die;
            $this->session->flashdata('siswa', 'Disimpan');
            redirect('Datasiswa');
        }
    }
    public function delete($id)
    {
        $this->form_validation->set_rules(
            'id',
            'ID',
            'required',
            [
                'required' => 'ID'
            ]
        );
        $this->form_validation->set_rules(
            'nama_siswa',
            'nama_siswa',
            'required',
            [
                'required' => 'Masukkan Nama Baru!!'
            ]
        );
        $this->form_validation->set_rules(
            'No_induk_siswa',
            'No_induk_siswa',
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
        $this->form_validation->set_rules(
            'Alamat',
            'Alamat',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'email',
            'email',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'no_telp',
            'no_telp',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'no_telp_orangtua',
            'no_telp_orangtua',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['siswa'] = $this->Datasiswa_model->getById($id);
            // var_dump($data['siswa']);
            // die;
            $data['title'] = 'Data Siswa';
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('Datasiswa/edit', $data);
            $this->load->view('layout/header');
        } else {
            $this->Datasiswa_model->delete();
            // var_dump($this->db->last_query());
            // die;
            $this->session->flashdata('siswa', 'Dihapus');
            redirect('Datasiswa');
        }
    }
}
