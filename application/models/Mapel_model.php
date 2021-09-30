<?php
class Mapel_model extends CI_Model
{
    public function getAllDataMapel()
    {
        return $this->db->get('mapel')->result_array();
    }
    public function getByID($kode_mapel)
    {
        if ($kode_mapel == NULL) {
            return $this->db->get('mapel')->result_array();
        } else {
            return $this->db->get_where('mapel', ['kode_mapel' => $kode_mapel])->row_array();
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
        $kode_mapel = htmlspecialchars($this->input->post('kode_mapel'));
        $data = [
            'mata_pelajaran' => htmlspecialchars($this->input->post('mata_pelajaran')),
        ];
        $this->db->where('kode_mapel', $kode_mapel);
        $this->db->update('mapel', $data);
    }
    public function delete()
    {
        $kode_mapel = htmlspecialchars($this->input->post('kode_mapel'));
        $this->db->where('kode_mapel', $kode_mapel);
        $this->db->delete('mapel');
        // var_dump($this->db->last_query());
        // die;
    }
}
