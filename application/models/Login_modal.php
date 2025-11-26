<?php
class Login_modal extends CI_Model
{
    
    public function isvalidate($username, $password)
    {
        $q = $this->db->where([
            'username' => $username,
            'password' => $password
        ])->get('users');

        return $q->num_rows() > 0;
    }
}
