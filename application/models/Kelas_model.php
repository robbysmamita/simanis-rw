<?php
class Kelas_model extends CI_Model
{
    public function getAllDataKelas()
    {
        return $this->db->get('kelas')->result_array();
    }
    public function getByID($kode_kelas)
    {
        if ($kode_kelas == NULL) {
            return $this->db->get('kelas')->result_array();
        } else {
            return $this->db->get_where('kelas', ['kode_kelas' => $kode_kelas])->row_array();
        }
    }

    public function tambah()
    {
        $data = [
            'kelas' => htmlspecialchars($this->input->post('kelas')),
            'category' => htmlspecialchars($this->input->post('category'))
        ];
        $this->db->insert('kelas', $data);
    }
    public function edit()
    {
        $kode_kelas = htmlspecialchars($this->input->post('kode_kelas'));
        $data = [
            'kelas' => htmlspecialchars($this->input->post('kelas')),
            'category' => htmlspecialchars($this->input->post('category'))
        ];
        $this->db->where('kode_kelas', $kode_kelas);
        $this->db->update('kelas', $data);
    }
    public function delete()
    {
        $kode_kelas = htmlspecialchars($this->input->post('kode_kelas'));
        $this->db->where('kode_kelas', $kode_kelas);
        $this->db->delete('kelas');
        // var_dump($this->db->last_query());
        // die;
    }
}
