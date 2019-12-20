<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('guru/M_Guru');

        if ($this->session->userdata('status') != "2") {
            $url = base_url();
            redirect($url);
        }
    }

<<<<<<< HEAD
	public function index()
	{
        $id_guru =  $this->session->userdata('username');
        $data['datadiri'] = $this->M_Guru->datadiri($id_guru);
//        $this->load->view('layout/header');
//        $this->load->view('layout/sidebar');
=======
    public function index()
    {
        $where =  $this->session->userdata('username');
        $data['siswa'] = $this->M_Guru->siswa($where);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
>>>>>>> 4afef1ace79f3ba5603c6e9d8e25d7ac0a98be8b
        $this->load->view('guru/v_dashboard', $data);
        $this->load->view('layout/footer');
    }
    public function nilai(){
        $id_guru =  $this->session->userdata('username');
        $data['nilai'] = $this->M_Guru->nilai($id_guru);
        print_r($data);
        $this->load->view('guru/v_nilai', $data);

    }
}
