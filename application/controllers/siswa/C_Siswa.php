<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Siswa extends CI_Controller {
    function __construct(){
        parent::__construct();

        if($this->session->userdata('status') != "siswa"){
            redirect(base_url());
        }
    }
	public function index()
	{
		$this->load->view('siswa/v_dashboard');
	}
}
