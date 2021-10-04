<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Dashboard";
        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar');
        $this->load->view('dashboard/index');
        $this->load->view('layout/footer');
    }
    public function index1()
    {
        $data['title'] = "Dashboard";
        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar_guru');
        $this->load->view('dashboard/index1');
        $this->load->view('layout/footer');
    }
    public function index2()
    {
        $data['title'] = "Dashboard";
        $this->load->view('layout/header', $data);
        $this->load->view('layout/topbar');
        $this->load->view('layout/sidebar_siswa');
        $this->load->view('dashboard/index2');
        $this->load->view('layout/footer');
    }
}
