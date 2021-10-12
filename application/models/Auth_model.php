<?php

class Auth_model extends CI_Model
{
    function login_admin($email, $password)
    {
        $query = $this->db->get_where('users', array('email$email' => $email, 'password' => $password), 1, 0);

        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function login_siswa($email, $password)
    {
        $query = $this->db->get_where('siswa', array('email$email' => $email, 'password' => $password), 1, 0);

        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function login_guru($email, $password)
    {
        $query = $this->db->get_where('siswa', array('email$emails' => $email, 'password' => $password), 1, 0);

        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
