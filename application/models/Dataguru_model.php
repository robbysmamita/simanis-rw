<?php

class Dataguru_model extends CI_Model{
    public function getAllDataGuru()
    {
        return $this->db->get('guru')->result_array();
    }
    public function getById()
    {
    }
    public function tambah()
    {
        $data = [
            'nama_guru' => htmlspecialchars($this->input->post('Nama_guru')),
            'no_induk_guru' => htmlspecialchars($this->input->post('No_induk_guru')),
            'jenis_kelamin ' => htmlspecialchars($this->input->post('Jenis_Kelamin')),           
        ];
        $this->db->insert('guru', $data);
    }
    public function edit()
    {
    }
}