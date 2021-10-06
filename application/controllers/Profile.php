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
}
