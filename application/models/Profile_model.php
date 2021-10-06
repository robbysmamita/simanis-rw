<?php

class Profile_model extends CI_Model
{

    public function getAllDataUser()
    {
        return $this->db->get('siswa')->result_array();
    }
    public function getByID($id)
    {
        if ($id == NULL) {
            return $this->db->get('siswa')->result_array();
        } else {
            return $this->db->get_where('siswa', ['id' => $id])->row_array();
        }
    }
    public function edit()
    {
    }
}
