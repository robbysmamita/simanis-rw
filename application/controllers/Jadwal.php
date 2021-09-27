<?php

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Jadwal_model');
    }

    public function index()
    {
        $data['title'] = 'Data Jadwal';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('Jadwal/index', $data);
        $this->load->view('layout/footer');
    }
    public function tambah()
    {
        $this->form_validation->set_rules(
            'jadwal',
            'jadwal',
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
            $data['active'] = "jadwal";
            $this->load->model('Jadwal_model');
            $data['title'] = "Tambah Jadwal";
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('Jadwal/tambah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Jadwal_model->tambah();
            $this->session->set_flashdata('jadwal', 'Ditambahkan');
            redirect('jadwal');
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
            'jadwal',
            'jadwal',
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
            $data['active'] = "jadwal";
            $this->load->model('Jadwal_model');
            $data['jadwal'] = $this->jadwal->get($kode_jadwal);
            $data['jadwal'] = $this->Jadwal_model->getByID($id);
            // var_dump($data['jadwal']);
            // die;
            $data['title'] = "Edit jadwal";
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('jadwal/edit', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Jadwal_model->edit();
            $this->session->set_flashdata('jadwal', 'Disimpan');
            redirect('jadwal');
        }
    }
    public function delete($id = null)
    {
        $data['active'] = "jadwal";
		$this->load->model('jadwal');
        // var_dump($id['jadwal']);
        $this->Jadwal_model->delete($id);
        $this->session->set_flashdata('jadwal', 'Dihapus');
        redirect('jadwal');
    }
}
	

