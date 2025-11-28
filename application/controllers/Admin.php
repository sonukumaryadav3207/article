<?php
class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('id')) {
        //     redirect('admin/login');
        // }
    }
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
                $data = $this->Login_modal->isvalidate($username, $password);
                $id = $data[0]->id;
                $username = $data[0]->username;
                $this->load->library('session');
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('id', $id);

                return redirect('admin/welcome');
            } else {
                echo 'error';
            }
        } else {
            validation_errors();
            $this->load->view('Admin/login');
        }
    }

    public function signup()
    {
        $this->load->view('Admin/signup');
    }

    public function register()
    {
        $this->load->library('form_validation');
        $this->load->model('Login_modal');
        $this->form_validation->set_rules('firstname', 'First Name', 'required|alpha');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|alpha');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[6] ');
        $this->form_validation->set_error_delimiters("<div class='text-danger'>", "</div");
        if ($this->form_validation->run()) {
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $data = [
                'firstname' => $firstname,
                'lastname'  => $lastname,
                'username'     => $firstname,
                'password'  => $password,
                'email' => $email
            ];
            $ins = $this->db->insert('users', $data);

            $this->load->library('email');
            $this->email->from(set_value('email'), set_value('firstname'));
            $this->email->to('iamsky3207@gmail.com');
            $this->email->subject("Registration Greeting..");

            $this->email->message("thank you");
            $this->email->set_newline("\r\n");
            $this->email->send();

            if (!$this->email->send()) {
                show_error($this->email->print_debugger());
            } else {
                echo "your mail has been sent";
            }

            if ($ins) {
                return redirect('admin/login');
            } else {
                echo 'error';
            }
        } else {
            validation_errors();
            $this->load->view('Admin/signup');
        }
    }

    public function welcome()
    {
        if (!$this->session->userdata('id')) {
            redirect('admin/login');
        }


        $this->load->model('Login_modal');
        $article = $this->Login_modal->articleList();

        $this->load->view('admin/dashboard_ajax', ['article' => $article]);
    }

    public function showAllEmployee()
    {
        $this->load->model('Login_modal');
        $data = $this->Login_modal->articleList();

        // Set JSON header
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }
}
