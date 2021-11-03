<?php

class Mapelsiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Mapel_model');
    }

    public function index()
    {
        $data['mapel'] = $this->Mapel_model->getAllDataMapel();
        $data['title'] = 'Mata Pelajaran';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('layout/sidebar_siswa', $data);
        $this->load->view('mapel/index2', $data);
        $this->load->view('layout/footer');
    }
    public function tambah()
    {
        $this->form_validation->set_rules(
            'mata_pelajaran',
            'Mata Pelajaran',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Tambah Mata Pelajaran";
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar');
            $this->load->view('layout/sidebar_siswa');
            $this->load->view('mapel/tambah');
            $this->load->view('layout/footer');
        } else {
            $this->Mapel_model->tambah();
            $this->session->set_flashdata('mapel', 'Ditambahkan');
            redirect('mapel');
        }
        
    }
    public function edit($kode_mapel)
    {
        $this->form_validation->set_rules(
            'kode_mapel',
            'kode mapel',
            'required',
            [
                'required' => 'kode_mapel'
            ]
        );
        $this->form_validation->set_rules(
            'mata_pelajaran',
            'Mata Pelajaran',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['mapel'] = $this->Mapel_model->getById($kode_mapel);
            $data['title'] = 'Data Mata Pelajaran';
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar_siswa', $data);
            $this->load->view('mapel/edit', $data);
            $this->load->view('layout/header');
        } else {
            $this->Mapel_model->edit();
            $this->session->set_flashdata('mapel', 'Diubah');
            redirect('mapel');
        }
    }
    public function delete($kode_mapel = null)
    {
        // var_dump($this->db->last_query());
        // var_dump($data['mapel']);
        // die;
        $this->Mapel_model->delete($kode_mapel);
        $this->session->set_flashdata('mapel', 'Dihapus');
        redirect('mapel');
    }
}
