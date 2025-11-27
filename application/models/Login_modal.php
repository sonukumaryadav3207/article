<?php
class Login_modal extends CI_Model
{

    public function isvalidate($username, $password)
    {
        $q = $this->db->where([
            'username' => $username,
            'password' => $password
        ])->get('users');

        return $q->result();
    }

    public function articleList()
    {
        $id = $this->session->userdata('id');
        $query = $this->db->select('id, article_title')
            ->from('articles')
            ->where('user_id', $id)
            ->get();


        return $query->result();
    }
}
