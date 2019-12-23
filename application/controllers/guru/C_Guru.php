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
    public function add_kd(){
        $datakd = array(
            'nip' => $this -> input -> post('nip'),
            'id_kelas' => $this -> input -> post('kelas'),
            'kd' => $this -> input -> post('kd'),
            'status' => $this -> input -> post('status')
        );
        $this->M_Guru->input_kd('tb_materi', $datakd);

        $data = $this->M_Guru->datasiswa($this -> input -> post('kelas'));

        foreach ($data as $siswa){
            $data_kd = $this->M_Guru->kd_last();
            $datasiswa = array(
                'id_siswa' => $siswa['nis'],
                'nilai' => 0,
                'semester' => 1,
                'id_kd' => $data_kd[0]->id_kd
            );
            $this->M_Guru->input_nilai('tb_nilai', $datasiswa);
        }
        redirect(base_url('guru/rombel/nilai/'.$this->input->post('kelas')));
    }
    public function nilai($kd, $kelas)
    {
        $data['nilai'] = $this->M_Guru->nilai($kd, $kelas);
        echo json_encode($data['nilai']);
    }
}
