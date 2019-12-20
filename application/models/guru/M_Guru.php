<?php

class M_Guru extends CI_Model
{
    function guru($table, $where){
        return $this -> db -> get_where($table, $where)
            ->result();
    }

    function siswa($table, $where_siswa){
        return $this->db->get_where("tb_siswa", $where_siswa)
            ->result();
    }
}

