<?php
class M_Login extends CI_Model
{
	function cek_login($table, $where){
		return $this -> db -> get_where($table, $where);
	}
	function guru($where){
        $this->db->select('*');
        $this->db->from('tb_guru tg');
        $this->db->where('tg.nip',$where);
        $query = $this->db->get();
        return $query->row_array();
    }
    function siswa($where){
        $this->db->select('*');
        $this->db->from('tb_siswa ts');
        $this->db->where('ts.nis',$where);
        $query = $this->db->get();
        return $query->row_array();
    }

}
