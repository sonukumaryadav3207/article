<?php
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        // Call the parent constructor first
        parent::__construct();

        // Authorization check
        // if (!$this->isauthorized()) {
        //     // If not authorized, redirect to the home page
        //     return redirect('home');
        // }
    }

    // Example of the 'isauthorized' method, should be defined as per your logic
    // private function isauthorized()
    // {
    //     // Check if the user is authorized (e.g., check session or user role)
    //     // For example, check if the user is logged in
    //     return $this->session->userdata('logged_in') === TRUE;
    // }
}
