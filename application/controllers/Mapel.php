<?php

class Mapel extends CI_Controller
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
        $this->load->view('layout/sidebar', $data);
        $this->load->view('mapel/index', $data);
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
            $this->load->view('layout/sidebar');
            $this->load->view('mapel/tambah');
            $this->load->view('layout/footer');
        } else {
            $this->Mapel_model->tambah();
            $this->session->set_flashdata('mapel', 'Ditambahkan');
            redirect('mapel');
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
            'mata_pelajaran',
            'Mata Pelajaran',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['mapel'] = $this->Mapel_model->getById($id);
            $data['title'] = 'Data Mata Pelajaran';
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('mapel/edit', $data);
            $this->load->view('layout/header');
        } else {
            $this->Mapel_model->edit();
            $this->session->set_flashdata('mapel', 'Diubah');
            redirect('mapel');
        }
    }
    public function delete($id = null)
    {
        // var_dump($this->db->last_query());
        // var_dump($data['mapel']);
        // die;
        $this->Mapel_model->delete($id);
        $this->session->set_flashdata('mapel', 'Dihapus');
        redirect('mapel');
    }
    
}
