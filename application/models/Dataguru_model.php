<?php

class Dataguru_model extends CI_Model
{
    public function getAllDataGuru()
    {
        return $this->db->get('guru')->result_array();
    }
    public function getById($kode_guru)
    {
        if ($kode_guru == NULL) {
            return $this->db->get('guru')->result_array();
        } else {
            return $this->db->get_where('guru', ['kode_guru' => $kode_guru])->row_array();
        }
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
        $kode_guru = htmlspecialchars($this->input->post('kode_guru'));
        $data = [
            'nama_guru' => htmlspecialchars($this->input->post('nama_guru')),
            'no_induk_guru' => htmlspecialchars($this->input->post('No_induk_guru')),
            'jenis_kelamin ' => htmlspecialchars($this->input->post('Jenis_Kelamin')),

        ];
        $this->db->where('kode_guru', $kode_guru);
        $this->db->update('guru', $data);
    }
    public function delete($kode_guru)
    {
        $kode_guru = htmlspecialchars($this->input->post('kode_guru'));
        $this->db->where('kode_guru', $kode_guru);
        $this->db->delete('guru');
    }
}
