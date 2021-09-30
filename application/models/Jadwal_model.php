<?php
class Jadwal_model extends CI_Model
{
    public function getAllDataJadwal()
    {
        return $this->db->get('jadwal')->result_array();
    }
    public function getByID($kode_jadwal)
    {
        if ($kode_jadwal == NULL) {
            return $this->db->get('jadwal')->result_array();
        } else {
            return $this->db->get_where('jadwal', ['kode_jadwal' => $kode_jadwal])->row_array();
        }
    }
    // }
    // public function getByKodeGuru($kode_guru){
	// 	$query = $this->db->query("SELECT kode_jadwal, nama_hari, waktu_mulai, waktu_akhir, kode_kelas, kode_mapel FROM guru NATURAL JOIN kelas NATURAL JOIN jadwal WHERE kode_guru='".$kode_guru."'");
	// 	return $query->result();
	// }
    // public function getByMapel($kode_mapel){
	// 	$query = $this->db->query("SELECT kode_jadwal, nama_hari, waktu_mulai, waktu_akhir, kode_kelas, kode_mapel FROM mapel NATURAL JOIN kelas NATURAL JOIN jadwal WHERE kode_mapel = '".$kode_mapel."'");
	// 	return $query->result();
	// }

    public function tesjoin()
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('kelas', 'kelas.kode_kelas = jadwal.kode_kelas');
        $this->db->join('guru', 'guru.kode_guru = jadwal.kode_guru');
        $this->db->join('mapel', 'mapel.kode_mapel = jadwal.kode_mapel');
        // $query = $this->db->get();
        return $this->db->get()->result_array();
        // $this->db->last_query($query);die;
        // $query->result_array();

    }

    public function tambah()
    {
        $data = [
            'nama_hari' => htmlspecialchars($this->input->post('nama_hari')),
            'kode_guru' => htmlspecialchars($this->input->post('kode_guru')),
            'kode_kelas' => htmlspecialchars($this->input->post('kode_kelas')),
            'kode_mapel' => htmlspecialchars($this->input->post('kode_mapel')),
            'mata_pelajaran' => htmlspecialchars($this->input->post('mata_pelajaran')),               
            'waktu_mulai' => htmlspecialchars($this->input->post('waktu_mulai')),
            'waktu_akhir' => htmlspecialchars($this->input->post('waktu_akhir'))
        ];
        $this->db->insert('jadwal', $data);
    }
    public function edit()
    {
        $kode_jadwal = htmlspecialchars($this->input->post('kode_jadwal'));
        $data = [
            'nama_hari' => htmlspecialchars($this->input->post('nama_hari')),
            'kode_guru' => htmlspecialchars($this->input->post('kode_guru')),
            'kode_kelas' => htmlspecialchars($this->input->post('kode_kelas')),
            'kode_mapel' => htmlspecialchars($this->input->post('kode_mapel')),
            'mata_pelajaran' => htmlspecialchars($this->input->post('mata_pelajaran')),               
            'waktu_mulai' => htmlspecialchars($this->input->post('waktu_mulai')),
            'waktu_akhir' => htmlspecialchars($this->input->post('waktu_akhir'))
        ];
        $this->db->where('kode_jadwal', $kode_jadwal);
        $this->db->update('jadwal', $data);
    }
    public function delete()
    {
        $kode_jadwal = htmlspecialchars($this->input->post('kode_jadwal'));
        $this->db->where('kode_jadwal', $kode_jadwal);
        $this->db->delete('jadwal');
        // var_dump($this->db->last_query());
        // die;
    }
}
