<?php
class Admin extends MY_Controller
{
    public function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'User Name', 'required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[4] ');
        $this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div");
        if ($this->form_validation->run()) {
            echo 'validation successful';
        } else {
            validation_errors();
            $this->load->view('Users/article_list');
        }
    }
}
