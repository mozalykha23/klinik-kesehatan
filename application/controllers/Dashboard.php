<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    // public function __construct()
    // {
    //     parent::__construct();

    //     // Memuat library session
    //     $this->load->library('session');

    //     // Pengecekan login
    //     if (!($this->session->userdata('login'))) {
    //         redirect('auth');
    //     }
    // }

    public function index()
    {
        $this->load->view('v_header');
        $this->load->view('v_dashboard');
        $this->load->view('v_footer');
    }
}
