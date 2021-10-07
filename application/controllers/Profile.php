<?php

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Profile_model');
    }
    public function index()
    {
        $data['sess'] = $this->session->userdata('email');
        // var_dump($data['sess']);
        // die;
        $data['title'] = 'Edit Profile';
        $this->load->view('layout/topbar');
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('Profile/index');
        $this->load->view('layout/footer');
    }
    public function edit($users_id)
    {
        $this->form_validation->set_rules(
            'users_id',
            'users_id',
            'required',
            [
                'required' => 'Harus Diisi!!'
            ]
        );
        $this->form_validation->set_rules(
            'first_name',
            'first_name',
            'required',
            [
                'required' => 'Harus Diisi!!'
            ]
        );
        $this->form_validation->set_rules(
            'last_name',
            'last_name',
            'required',
            [
                'required' => 'Harus Diisi!!'
            ]
        );
        $this->form_validation->set_rules(
            'email',
            'email',
            'required',
            [
                'required' => 'Harus Diisi!!'
            ]
        );
        $this->form_validation->set_rules(
            'no_telp',
            'no_telp',
            'required',
            [
                'required' => 'Harus Diisi!!'
            ]
        );
        if ($this->form_validation->run() == FALSE) {
            $data['users'] = $this->Profile_model->getByID($users_id);
            $data['title'] = 'Edit Profile';
            $this->load->view('layout/header', $data);
            $this->load->view('layout/topbar');
            $this->load->view('layout/sidebar', $data);
            $this->load->view('Profile/index');
            $this->load->view('layout/footer');
        } else {
            $this->Profile_model->edit();
            $this->session->set_flashdata('users', 'Dirubah');
            redirect('Profile');
        }
    }
}
