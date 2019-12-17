<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Siswa extends CI_Controller {
	public function index()
	{
		$this->load->view('siswa/v_dashboard');
	}
}
