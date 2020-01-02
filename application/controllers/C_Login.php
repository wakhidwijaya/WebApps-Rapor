<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this -> load -> model('M_Login');
	}

	function index(){
        if($this->session->userdata('status') == "1"){
            redirect(base_url("siswa"));
        }
        else if($this->session->userdata('status') == "2"){
            redirect(base_url("guru"));
        }
        else{
            $this->load->view('v_login');
        }
	}

	function login(){
	    if ($this -> session -> userdata('status') != null){
	        redirect(base_url());
        }else{
            $username = $this -> input -> post('username');
            $password = $this -> input -> post('password');

            $where = array(
                'username' => $username,
                'password' => md5($password)
            );
            $cek_login = $this->M_Login->cek_login("tb_user", $where)->num_rows();

            if ($cek_login > 0){
                $data_login = $this->M_Login->cek_login("tb_user", $where)->row_array();
                if ($data_login['status'] == 1){
                    $siswa = $this->M_Login->siswa($data_login['username']);
                    $data_session = array(
                        'nama' => $siswa['nama'],
                        'username' => $data_login['username'],
                        'status' => $data_login['status']
                    );
                    $this->session->set_userdata($data_session);
                    redirect(base_url("siswa"));
                }
                else{
                    $guru = $this->M_Login->guru($data_login['username']);
                    $data_session = array(
    					'nama' => $guru['nama'],
                        'username' => $data_login['username'],
                        'status' => $data_login['status']
                    );
                    $this->session->set_userdata($data_session);
                    redirect(base_url("guru"));
                }
            }
            else{
//                echo "Username atau Password yang dimasukkan salah";
                $this->session->set_flashdata('errormsg', 'Username atau Password salah'); // Buat session flashdata
                redirect(base_url());
            }
        }

    }
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
