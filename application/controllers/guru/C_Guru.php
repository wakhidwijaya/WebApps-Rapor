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

    public function rombel()
    {
        $id_guru =  $this->session->userdata('username');
        $data['rombel'] = $this->M_Guru->rombel($id_guru);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('guru/v_rombel', $data);
        $this->load->view('layout/footer');
    }
    public function kd($id)
    {
        $data['kd'] = $this->M_Guru->kd($id);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('guru/v_nilai', $data);
        $this->load->view('layout/footer');
    }
    public function nilai($kd, $kelas)
    {
        $data['nilai'] = $this->M_Guru->nilai($kd, $kelas);
        echo json_encode($data['nilai']);
    }
}
