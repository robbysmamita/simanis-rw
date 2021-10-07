<?php

class Profile_model extends CI_Model
{
    public function getAllDataUser()
    {
        return $this->db->get('users')->result_array();
    }
    public function getByID($users_id)
    {
        if ($users_id == NULL) {
            return $this->db->get('users')->result_array();
        } else {
            return $this->db->get_where('users', ['id' => $users_id])->row_array();
        }
    }
    public function edit()
    {
        $users_id = htmlspecialchars($this->input->post('users'));
        $data = [
            'first_name' => htmlspecialchars($this->input->post('first_name')),
            'last_name' => htmlspecialchars($this->input->post('last_name')),
            'email' => htmlspecialchars($this->input->post('email')),
            'no_telp' => htmlspecialchars($this->input->post('no_telp'))
        ];
        $this->db->where('id', $users_id);
        $this->db->update('users', $data);
    }
}
