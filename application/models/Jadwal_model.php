<?php

class Jadwal_model extends CI_Model
{
    public function getAllDataJadwal()
    {
        return $this->db->get('jadwal');
    }
}
