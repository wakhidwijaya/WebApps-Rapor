<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Guru extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this -> load -> model('guru/M_Guru');

        if($this->session->userdata('status') != "2"){
            $url = base_url();
            redirect($url);
        }
    }

	public function index()
	{
        $where = array(
            'nip' => $this->session->userdata('username')
        );
        $data['guru'] = $this->M_Guru->guru("tb_guru", $where);
        print_r($data['guru']);
        $where_siswa = array(
          'wali_murid' => 1
        );
        $data['siswa'] = $this->M_Guru->siswa("tb_siswa", $where_siswa);

//        $this->load->view('layout/header');
//        $this->load->view('layout/sidebar');
        $this->load->view('guru/v_dashboard', $data);
//        $this->load->view('layout/footer');

    }
}
