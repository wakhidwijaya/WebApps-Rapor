<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Siswa extends CI_Controller {
    function __construct(){
        parent::__construct();

        if($this->session->userdata('status') != "1"){
            $url = base_url();
            redirect($url);
        }
    }
	public function index()
	{
		$this->load->view('siswa/v_dashboard');
	}
}
