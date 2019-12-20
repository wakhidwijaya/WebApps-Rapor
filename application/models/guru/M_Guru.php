<?php

class M_Guru extends CI_Model
{

    function siswa($where){
        $this->db->select('ts.*', 'tk.kelas');
        $this->db->from('tb_siswa ts');
        $this->db->join('tb_kelas tk', 'ts.kelas = tk.id_kelas');
        $this->db->join('tb_guru tg', 'ts.wali_kelas = tg.id_guru');
        $this->db->where('tg.nip', $where);
        $query = $this -> db -> get();
        return $query->result_array();
    }
}

