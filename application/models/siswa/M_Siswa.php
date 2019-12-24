<?php

class M_Siswa extends CI_Model
{
    private $_table = "tb_siswa";

    public $nis;
    public $nama;
    public $kelas;
    public $alamat;

    public function nilai($id)
    {
        $query = $this->db->query('SELECT ts.nama as nama, ts.nis,  tk.kelas, tn.semester, tm.mapel, tmt.kd , tn.nilai
        FROM tb_nilai AS tn 
        JOIN tb_siswa AS ts ON tn.id_siswa = ts.nis 
        JOIN tb_kelas as tk ON ts.kelas = tk.id_kelas
        JOIN tb_materi as tmt ON tn.id_kd = tmt.id_kd
        JOIN tb_guru as tg ON tmt.nip=tg.nip
        JOIN tb_mapel as tm ON tg.id_mapel = tm.id_mapel
        WHERE ts.nis = "' . $id . '"');
        return $query->result_array();
    }

    public function get_siswa($id)
    {
        $this->db->select('*');
        $this->db->from('tb_siswa ts');
        $this->db->where('ts.nis', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getEdit($field, $value)
    {
        $this->db->where($field, $value);
        return $this->db->get('tb_siswa');
    }

    public function update($post)
    {
        $this->db->where('id_siswa', $id);
        $this->db->update('tb_siswa', $post);
        return $this->db->affected_rows();
    }
}
