<?php
class Datasiswa_model extends CI_Model
{
    public function getAllDataSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }
    public function getById()
    {
    }
    public function tambah()
    {
        $data = [
            'nama_Siswa' => htmlspecialchars($this->input->post('Nama_Siswa')),
            'no_induk_siswa' => htmlspecialchars($this->input->post('No_induk_siswa')),
            'jenis_kelamin ' => htmlspecialchars($this->input->post('Jenis_Kelamin')),
            'alamat' => htmlspecialchars($this->input->post('Alamat')),
            'no_telp' => htmlspecialchars($this->input->post('no_telp')),
            'no_telp_orangtua' => htmlspecialchars($this->input->post('no_telp_orangtua')),
            'email' => htmlspecialchars($this->input->post('email'))
        ];
        $this->db->insert('siswa', $data);
    }
    public function edit()
    {
    }
}
