<?php

class Kelassiswa extends CI_Controller
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
        $this->load->view('layout/sidebar_siswa');
        $this->load->view('kelas/index2', $data);
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
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar_siswa', $data);
            $this->load->view('kelassiswa/tambah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Kelas_model->tambah();
            $this->session->set_flashdata('kelassiswa', 'Ditambahkan');
            redirect('kelassiswa');
        }
    }
    public function edit($kode_kelas)
    {

        $this->form_validation->set_rules(
            'kode_kelas',
            'kode kelas',
            'required',
            [
                'required' => 'kode_kelas'
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'kelas',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'category',
            'category',
            'required',
            [
                'required' => 'Harus Diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['kelas'] = $this->Kelas_model->getByID($kode_kelas);
            // var_dump($data['kelas']);
            // die;
            $data['title'] = "Edit Kelas";
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar_siswa', $data);
            $this->load->view('kelassiswa/edit', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Kelas_model->edit();
            $this->session->set_flashdata('kelassiswa', 'Disimpan');
            redirect('kelassiswa');
        }
    }
    public function delete($kode_kelas = null)
    {

        // var_dump($kode_kelas['kelas']);
        $this->Kelas_model->delete($kode_kelas);
        $this->session->set_flashdata('kelassiswa', 'Dihapus');
        redirect('kelassiswa');
    }
}
