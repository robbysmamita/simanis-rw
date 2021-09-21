<?php

class Login_model extends CI_Model
{
    function auth_siswa($username, $password)
    {
        $query = $this->db->query("SELECT * FROM siswa WHERE email = '$username' AND 'password'= '$password'");
    }
}
