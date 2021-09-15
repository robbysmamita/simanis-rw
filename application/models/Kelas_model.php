<?php
class Kelas_model extends CI_Model
{
    public function getAllDataKelas()
    {
        return $this->db->get('kelas')->result_array();
    }
    public function getByID($id)
    {
        if ($id == NULL) {
            return $this->db->get('kelas')->result_array();
        } else {
            return $this->db->get_where('kelas', ['id', $id])->row_array();
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
        $id = htmlspecialchars($this->input->post('id'));
        $data = [
            'kelas' => htmlspecialchars($this->input->post('kelas')),
            'category' => htmlspecialchars($this->input->post('category'))
        ];
        $this->db->where('id', $id);
        $this->db->update('kelas', $data);
    }
    public function delete($id = null)
    {
        $id = htmlspecialchars($id);
        $this->db->where('id', $id);
        $this->db->delete('kelas');
    }
}
