<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function index()
    {
        $this->load->view('landing');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function register()
    {
        $this->load->view('register');
    }

    public function forgot()
    {
        $this->load->view('forget-password');
    }
    
    public function dashboard()
    {
    $this->load->view('dashboard');
    }
    
}
