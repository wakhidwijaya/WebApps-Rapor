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
        $this->db->select('tn.nilai, tm.mapel, ts.nama');
        $this->db->from('tb_nilai tn');
        $this->db->from('tb_guru tg');
        $this->db->where('tg.nip', $where);
        $this->db->join('tb_siswa ts', 'tn.id_siswa = ts.nis');
        $this->db->join('tb_mapel tm', 'tn.id_mapel = tm.id_mapel');
        $query = $this -> db -> get();
        return $query->result_array();
    }
}

