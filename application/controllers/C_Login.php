<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this -> load -> model('M_Login');
	}

	function index(){
		$this->load->view('v_login');
	}

	function login(){
		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');

		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek_login = $this->M_Login->cek_login("tb_user", $where)->num_rows();
		$data_login = $this->M_Login->cek_login("tb_user", $where)->row_array();

		if ($cek_login > 0){
			if ($data_login['status'] == 1){
				$where_id = array(
					'nis' => $data_login['username']
				);
				$siswa = $this->M_Login->siswa("tb_siswa", $where_id)->row_array();
				$data_session = array(
//					'id' => $guru[nip],
//					'nama' => $guru[nama],
					'status' => 'login'
				);
				$this->session->set_userdata($data_session);
				redirect(base_url("siswa"));
			}
			else{
				$where_id = array(
					'nip' => $data_login['username']
				);
				$guru = $this->M_Login->guru("tb_guru", $where_id)->row_array();
				$data_session = array(
//					'id' => $guru[nip],
//					'nama' => $guru[nama],
					'status' => 'login'
				);
				$this->session->set_userdata($data_session);
				redirect(base_url("guru"));
			}
		}
		else{
			echo "Username atau Password yang dimasukkan salah";
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
