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

    public function index()
    {
        $id_guru =  $this->session->userdata('username');
        $data['datadiri'] = $this->M_Guru->datadiri($id_guru);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
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
