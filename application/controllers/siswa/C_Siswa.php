<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('siswa/M_Siswa');
        if ($this->session->userdata('status') != "1") {
            $url = base_url();
            redirect($url);
        }
    }
    public function index()
    {
        $id_siswa =  $this->session->userdata('username');
        $data['siswa'] = $this->M_Siswa->get_siswa($id_siswa);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('siswa/v_dashboard', $data);
        $this->load->view('layout/footer');
    }

    public function nilai()
    {
        $id_siswa =  $this->session->userdata('username');
        $data['nilai'] = $this->M_Siswa->nilai($id_siswa);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('siswa/v_nilai', $data);
        $this->load->view('layout/footer');
    }

    // function edit($id)
    // {
    //     $id_siswa =  $this->session->userdata('username');
    //     $data['nilai'] = $this->M_Siswa->nilai($id_siswa);
    // }
}
