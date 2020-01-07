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

        $data['jmlguru'] = $this->M_Guru->countguru($id_guru);
        $data['jmlkelas'] = $this->M_Guru->countkelas();
        $data['slot'] = count($data['jmlkelas']) / count($data['jmlguru']);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('guru/v_rombel', $data);
        $this->load->view('layout/footer');
    }
    public function kd($kelas)
    {
        $id_guru =  $this->session->userdata('username');
        $data['kd'] = $this->M_Guru->kd($kelas, $id_guru);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('guru/v_nilai', $data);
        $this->load->view('layout/footer');
    }
    public function add_kd()
    {
        $datakd = array(
            'nip' => $this->input->post('nip'),
            'id_kelas' => $this->input->post('kelas'),
            'kd' => $this->input->post('kd'),
            'status' => $this->input->post('status')
        );
        $this->M_Guru->input_kd('tb_materi', $datakd);

        $data = $this->M_Guru->datasiswa($this->input->post('kelas'));

        foreach ($data as $siswa) {
            $data_kd = $this->M_Guru->kd_last();
            $datasiswa = array(
                'id_siswa' => $siswa['nis'],
                'nilai' => 0,
                'semester' => 1,
                'id_kd' => $data_kd[0]->id_kd
            );
            $this->M_Guru->input_nilai('tb_nilai', $datasiswa);
        }
        redirect(base_url('guru/rombel/nilai/' . $this->input->post('kelas')));
    }
    public function delete_kd($id_kd, $id_kelas)
    {
        $this->M_Guru->hapus_siswa($id_kd);
        $this->M_Guru->hapus_kd($id_kd);
        redirect(base_url('guru/rombel/nilai/' . $id_kelas));
    }
    public function nilai($kd, $kelas)
    {
        $data['nilai'] = $this->M_Guru->nilai($kd, $kelas);
        echo json_encode($data['nilai']);
    }

    public function jadwal()
    {
        $id_guru = $this->session->userdata('username');
        $data['jmlguru'] = $this->M_Guru->countguru($id_guru);
        $data['jmlkelas'] = $this->M_Guru->countkelas();
        $data['slot'] = count($data['jmlkelas']) / count($data['jmlguru']);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('guru/v_jadwal', $data);
        $this->load->view('layout/footer');
    }
    public function ambilkelas()
    {
        $id_guru = $this->session->userdata('username');
        $guru = $this->M_Guru->countguru($id_guru);
        $kelas = $this->M_Guru->countkelas();
        $data['slot'] = count($kelas) / count($guru);
        $slot = $data['slot'];

        $kd = array(
            array('status' => 1, 'kd' => 'Ujian Tengah Smester'),
            array('status' => 2, 'kd' => 'Ujian Akhir Smester'));

        $slotkelas = array_chunk($kelas, $data['slot']);
        for ($i = 0; $i< count($guru); $i++){
            $cekmateri = $this->M_Guru->cekmateri(array_column($guru, "nip"), array_column($slotkelas[$i], 'id_kelas'));
            if ($cekmateri == null){
                foreach ($slotkelas[$i] as $kelasava){
                    foreach (array_column($guru, "nip") as $nip){
                        if ($nip == $id_guru){
                            foreach ($kd as $kddata) {
                                $datakd = array(
                                    'nip' => $this->session->userdata['username'],
                                    'id_kelas' => $kelasava['id_kelas'],
                                    'kd' => $kddata['kd'],
                                    'status' => $kddata['status']
                                );
                                $this->M_Guru->input_kd('tb_materi', $datakd);
                                $data = $this->M_Guru->datasiswa($kelasava['id_kelas']);
                                foreach ($data as $siswa) {
                                    $data_kd = $this->M_Guru->kd_last();
                                    $datasiswa = array(
                                        'id_siswa' => $siswa['nis'],
                                        'nilai' => 0,
                                        'semester' => 1,
                                        'id_kd' => $data_kd[0]->id_kd
                                    );
                                    $this->M_Guru->input_nilai('tb_nilai', $datasiswa);
                                }
                            }
                        }
                    }
                        $slot--;
                }
                if ($slot == 0){redirect(base_url('guru/rombel'));}
            }
        }
//        foreach ($kelas as $kelasdata){
//            foreach ($kelasdata as $kelasslot){
//                $slot++;
//                $cekguru = $this->M_Guru->cekgurumapel($id_guru);
//                foreach ($cekguru as $gurunip){
//                    $cekmateri = $this->M_Guru->cekmateri($gurunip['nip']);
//                    if (count($cekmateri) == 0){
//                        if ($gurunip['nip'] == $id_guru){
//                        }
//                    }
//                }
//            }
//            if ($slot >= $data['slot']){
//                echo "<br/><br/><br/>".$slot;
//                break;
//            }
//        }
//        redirect(base_url('guru/rombel'));
//        foreach ($kelas[0] as $kelasslot) {
//            foreach ($kd as $kddata) {
//                $datakd = array(
//                    'nip' => $this->session->userdata['username'],
//                    'id_kelas' => $kelasslot['id_kelas'],
//                    'kd' => $kddata['kd'],
//                    'status' => $kddata['status']
//                );
//                $this->M_Guru->input_kd('tb_materi', $datakd);
//                $data = $this->M_Guru->datasiswa($kelasslot['id_kelas']);
//
//                foreach ($data as $siswa) {
//                    $data_kd = $this->M_Guru->kd_last();
//                    print_r($data_kd);
//                    $datasiswa = array(
//                        'id_siswa' => $siswa['nis'],
//                        'nilai' => 0,
//                        'semester' => 1,
//                        'id_kd' => $data_kd[0]->id_kd
//                    );
//                    print_r($datasiswa);
//                    $this->M_Guru->input_nilai('tb_nilai', $datasiswa);
//                }
//            }
//        }
    }

    public function simpan_nilai()
    {
        $nilai = $this->input->post('nilai');
        $id_kd = $this->input->post('komda');
        foreach ($nilai as $nis => $nilaisiswa) {
            $this->M_Guru->updatenilai($nis, $nilaisiswa, $id_kd);
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function wali()
    {
        echo 'wali';
    }
}
