<?php
class Mapel_model extends CI_Model
{
    public function getAllDataMapel()
    {
        return $this->db->get('mapel')->result_array();
    }
    public function getByID($id)
    {
        if ($id == NULL) {
            return $this->db->get('mapel')->result_array();
        } else {
            return $this->db->get_where('mapel', ['id' => $id])->row_array();
        }
    }

    public function tambah()
    {
        $data = [
            'mata_pelajaran' => htmlspecialchars($this->input->post('mata_pelajaran')),
            
        ];
        $this->db->insert('mapel', $data);
    }
    public function edit()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $data = [
            'mata_pelajaran' => htmlspecialchars($this->input->post('mata_pelajaran')),
        ];
        $this->db->where('id', $id);
        $this->db->update('mapel', $data);
    }
    public function delete()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $this->db->where('id', $id);
        $this->db->delete('mapel');
        // var_dump($this->db->last_query());
        // die;
    }
}
