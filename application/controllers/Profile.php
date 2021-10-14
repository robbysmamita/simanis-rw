<?php

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Profile_model');
    }
    public function profile(){
        $data['Akun'] = $this->Profile_model->getAllDataUser();
        $data['title'] = 'Profile';
        $this->load->view('layout/topbar', $data);
        $this->load->view('layout/header'. $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('Profile/Edit', $data);
        $this->load->view('layout/footer');
    }
    public function edit()
    {
        $this->form_validation->set_rules(
            'First_name',
            'first_name',
            'required',
            [
                'required' => 'Harus Diisi'
            ]
            );
        $this->form_validation->set_rules(
            'Last_name',
            'last_name',
            'required',
            [
                'required' => 'Harus Diisi'
            ]
            );
        $this->form_validation->set_rules(
            'email',
            'email',
            'required',
            [
                'required' => 'Harus Diisi'
            ]
            );
        $this->form_validation->set_rules(
            'no_telp',
            'no_telp',
            'required',
            [
                'required' => 'Harus Diisi'
            ]
            );
        $this->form_validation->set_rules(
            'alamat',
            'alamat',
            'required',
            [
                'required' => 'Harus Diisi'
            ]
        );
        
        $id = $this->session->userdata('id');
        $data = array(
            'first_name'    => $this->input->post('first_name'),
            'last_name'     => $this->input->post('last_name'),
            'email'         => $this->input->post('email'),
            'no_telp'       => $this->input->post('no_telp'),
            'alamat'        => $this->input->post('alamat'),
        );
        if($this->library->form_validation == TRUE)
    }
}