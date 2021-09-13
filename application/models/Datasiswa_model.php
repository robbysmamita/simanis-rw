<?php
class Datasiswa_model extends CI_Model
{
    public function getAllDataSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }
    public function getById($id)
    {
        if ($id == NULL) {
            return $this->db->get('siswa')->result_array();
        } else {
            return $this->db->get_where('siswa', ['id' => $id])->row_array();
        }
    }
    public function tambah()
    {
        $data = [
            'nama_Siswa' => htmlspecialchars($this->input->post('Nama_Siswa')),
            'no_induk_siswa' => htmlspecialchars($this->input->post('No_induk_siswa')),
            'jenis_kelamin ' => htmlspecialchars($this->input->post('Jenis_Kelamin')),
            'alamat' => htmlspecialchars($this->input->post('Alamat')),
            'no_telp' => htmlspecialchars($this->input->post('no_telp')),
            'no_telp_orangtua' => htmlspecialchars($this->input->post('no_telp_orangtua')),
            'email' => htmlspecialchars($this->input->post('email'))
        ];
        $this->db->insert('siswa', $data);
    }
    public function edit() 
    {
        $id = htmlspecialchars($this->input->post('id'));
        $data = [
            'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa')),
            'no_induk_siswa' => htmlspecialchars($this->input->post('No_induk_siswa')),
            'jenis_kelamin ' => htmlspecialchars($this->input->post('Jenis_Kelamin')),
            'alamat' => htmlspecialchars($this->input->post('Alamat')),
            'no_telp' => htmlspecialchars($this->input->post('no_telp')),
            'no_telp_orangtua' => htmlspecialchars($this->input->post('no_telp_orangtua')),
            'email' => htmlspecialchars($this->input->post('email')),
            'kelas_id' => NULL
        ];
        $this->db->where('id', $id);
        $this->db->update('siswa', $data);
    }
    public function delete()
    {
        $id = htmlspecialchars($this->input->post('id'));
        $data = [
            'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa')),
            'no_induk_siswa' => htmlspecialchars($this->input->post('No_induk_siswa')),
            'jenis_kelamin ' => htmlspecialchars($this->input->post('Jenis_Kelamin')),
            'alamat' => htmlspecialchars($this->input->post('Alamat')),
            'no_telp' => htmlspecialchars($this->input->post('no_telp')),
            'no_telp_orangtua' => htmlspecialchars($this->input->post('no_telp_orangtua')),
            'email' => htmlspecialchars($this->input->post('email')),
            'kelas_id' => NULL
        ];
        $this->db->where('id', $id);
        $this->db->delete('siswa', $data);
    }
}
