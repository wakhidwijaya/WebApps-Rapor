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
        // $data['nilai_chart'] = $this->M_Siswa->chart($id_siswa);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('siswa/v_dashboard', $data);
        // print_r($data);
        $this->load->view('layout/footer');
    }

    public function chart()
    {
        $id_siswa =  $this->session->userdata('username');
        $data['nilai_chart'] = $this->M_Siswa->chart($id_siswa);
        echo json_encode($data['nilai_chart']);
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

    public function nilai_akhir()
    {
        $id_siswa =  $this->session->userdata('username');
        $data['nilai'] = $this->M_Siswa->nilai_akhir($id_siswa);
        print_r($data);
    }

    public function jadwal()
    {
        $id_siswa =  $this->session->userdata('username');
        $data['nilai_chart'] = $this->M_Siswa->chart($id_siswa);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('guru/v_jadwal', $data);
        $this->load->view('layout/footer');
    }

    function edit($id)
    {
        $id_siswa =  $id;
        $alamat      = $this->input->post('alamat');

        $this->M_Siswa->edit($id, $alamat);

        redirect(base_url());
    }
}
