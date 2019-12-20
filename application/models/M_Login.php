<?php


class M_Login extends CI_Model
{
	function cek_login($table, $where){
		return $this -> db -> get_where($table, $where);
	}
	function guru($where){
        $this->db->select('*');
        $this->db->from('tb_guru');
        $this->db->where('nip',$where);
        $query = $this->db->get();
        return $query->result_array();
    }
    function siswa(){
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->where('nis',$where);
        $query = $this->db->get();
        return $query->result_array();
    }

}
