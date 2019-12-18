<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Guru extends CI_Controller {
    function __construct(){
        parent::__construct();

        if($this->session->userdata('status') != "guru"){
            redirect(base_url());
        }
    }

	public function index()
	{
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('guru/v_dashboard');
        $this->load->view('layout/footer');

    }
}
