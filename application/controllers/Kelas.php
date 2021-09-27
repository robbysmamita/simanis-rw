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
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('kelas/tambah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Kelas_model->tambah();
            $this->session->set_flashdata('kelas', 'Ditambahkan');
            redirect('kelas');
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
            $data['kelas'] = $this->Kelas_model->getByID($id);
            // var_dump($data['kelas']);
            // die;
            $data['title'] = "Edit Kelas";
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('kelas/edit', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Kelas_model->edit();
            $this->session->set_flashdata('kelas', 'Disimpan');
            redirect('Kelas');
        }
    }
    public function delete($id = null)
    {

        // var_dump($id['kelas']);
        $this->Kelas_model->delete($id);
        $this->session->set_flashdata('kelas', 'Dihapus');
        redirect('Kelas');
    }
}
