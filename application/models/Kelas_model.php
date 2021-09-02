<?php
class Kelas_model extends CI_Model
{
    public function getAllDataKelas()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function tambah()
    {
        $data = [
            'kelas' => htmlspecialchars($this->input->post('kelas')),
            'category' => htmlspecialchars($this->input->post('category'))
        ];
        $this->db->insert('kelas', $data);
    }
}
