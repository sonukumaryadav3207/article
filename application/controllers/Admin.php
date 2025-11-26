<?php
class Admin extends MY_Controller
{
    public function login()
    {
        $this->load->library('form_validation');
        $this->load->model('Login_modal');
        $this->form_validation->set_rules('username', 'User Name', 'required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[6] ');
        $this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div");
        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($this->Login_modal->isvalidate($username, $password)) {
                echo 'cxc';
            } else {
                echo 'error';
            }
        } else {
            validation_errors();
            $this->load->view('Admin/login');
        }
    }
}
