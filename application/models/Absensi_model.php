<?php
class Absensi_model extends CI_Model
{
    public function getAllDataSiswa()
    {
        return $this->db->get('absensi')->result_array();
    }
}
