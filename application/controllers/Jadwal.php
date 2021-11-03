<?php

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Jadwal_model');
        $this->load->model('Dataguru_model');
        $this->load->model('Kelas_model');
        $this->load->model('Mapel_model');
    }

    public function index()
    {

        $data['title'] = 'Data Jadwal';
        $data['join'] = $this->Jadwal_model->tesjoin();
        // var_dump($data ['join']); die;
        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('jadwal/index', $data);
        $this->load->view('layout/footer');
    }
    public function tambah()
    {
        $data['guru'] = $this->Dataguru_model->getAllDataGuru();
        $data['kelas'] = $this->Kelas_model->getAllDataKelas();
        $data['mapel'] = $this->Mapel_model->getAllDataMapel();
        $this->form_validation->set_rules(
            'nama_hari',
            'nama hari',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'kode_guru',
            'kode guru',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'kode_kelas',
            'kode kelas',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'kode_mapel',
            'kode mapel',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        // $this->form_validation->set_rules(
        //     'mata_pelajaran',
        //     'mata pelajaram',
        //     'required',
        //     [
        //         'required' => 'Harus diisi'
        //     ]
        // );
        $this->form_validation->set_rules(
            'waktu_mulai',
            'waktu mulai',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'waktu_akhir',
            'waktu akhir',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Tambah Jadwal";
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('jadwal/tambah', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Jadwal_model->tambah();
            $this->session->set_flashdata('jadwal', 'Ditambahkan');
            redirect('jadwal');
        }
    }
    public function edit($kode_jadwal)
    {
        $this->form_validation->set_rules(
            'kode_jadwal',
            'kode jadwal',
            'required',
            [
                'required' => 'kode_jadwal'
            ]
        );
        $this->form_validation->set_rules(
            'nama_hari',
            'nama hari',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'kode_guru',
            'kode guru',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'kode_kelas',
            'kode kelas',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'kode_mapel',
            'kode mapel',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'mata_pelajaran',
            'mata pelajaram',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'waktu_mulai',
            'waktu mulai',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'waktu_akhir',
            'waktu akhir',
            'required',
            [
                'required' => 'Harus diisi'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['jadwal'] = $this->Jadwal_model->getByID($kode_jadwal);
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
    public function delete()
    {

        // $data['active'] = "jadwal";
        // $this->load->model('jadwal');
        // var_dump($kode_jadwal['jadwal']);
        $id = $this->input->post('id');
        $this->db->where('kode_jadwal', $id);
        $this->db->delete('jadwal');
        // $this->Jadwal_model->delete($kode_jadwal);
        // $this->session->set_flashdata('jadwal', 'Dihapus');
        redirect('jadwal');
    }
}
