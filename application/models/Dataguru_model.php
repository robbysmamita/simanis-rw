<?php

class Dataguru_model extends CI_Model
{
    public function getAllDataGuru()
    {
        return $this->db->get('guru')->result_array();
    }
    public function getById($id)
    {
        if ($id == NULL) {
            return $this->db->get('guru')->result_array();
        } else {
            return $this->db->get_where('guru', ['id' => $id])->row_array();
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
        $id = htmlspecialchars($this->input->post('id'));
        $data = [
            'nama_guru' => htmlspecialchars($this->input->post('Nama_guru')),
            'no_induk_guru' => htmlspecialchars($this->input->post('No_induk_guru')),
            'jenis_kelamin ' => htmlspecialchars($this->input->post('Jenis_Kelamin')),

        ];
        $this->db->where('id', $id);
        $this->db->update('guru', $data);
    }
    public function delete($id)
    {
        // $id = htmlspecialchars($this->input->post('id'));
        $this->db->where('id', $id);
        $this->db->delete('guru');
    }
}
