<?php

class Auth_model extends CI_Model
{
    private $_table = "user";
    const SESSION_KEY = ' ';

    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username/NIS/P',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ]
        ];
    }
    public function private_login()
    {
    }
}
