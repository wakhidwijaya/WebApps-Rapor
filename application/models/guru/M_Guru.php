<?php

class M_Guru extends CI_Model
{
    function datadiri($where){
        $this->db->select('*');
        $this->db->from('tb_guru tg');
        $this->db->join('tb_mapel tm', 'tg.id_mapel = tm.id_mapel');
        $this->db->where('tg.nip', $where);
        $query = $this->db->get();
        return $query->result_array();
    }
    function nilai($where){
        $query = $this->db->query('SELECT ts.nis, ts.nama as nama, tk.kelas, tn.semester, tn.nilai, tm.mapel
            FROM tb_nilai AS tn 
            JOIN tb_siswa AS ts ON tn.id_siswa = ts.nis 
            JOIN tb_guru as tg ON tn.id_guru=tg.id_guru
            JOIN tb_mapel as tm ON tg.id_mapel = tm.id_mapel
            JOIN tb_kelas as tk ON ts.kelas = tk.id_kelas
            WHERE tg.nip = 2019');
        return $query->result_array();
    }
}

