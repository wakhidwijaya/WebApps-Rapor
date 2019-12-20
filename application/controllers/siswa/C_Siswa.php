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
        $data['nilai'] = $this->M_Siswa->nilai();
        $this->load->view('siswa/v_dashboard', $data);
    }

    public function siswa()
    {
        // $where = 1;
        $data['siswa'] = $this->M_Siswa->get_siswa();
        $this->load->view('siswa/v_dSiswa', $data);
    }
}
