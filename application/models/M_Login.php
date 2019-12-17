<?php


class M_Login extends CI_Model
{
	function cek_login($table, $where){
		return $this -> db -> get_where($table, $where);
	}

	function siswa($table, $where){
		return $this-> db -> get_where($table, $where);
	}
	function guru($table, $where){
		return $this-> db -> get_where($table, $where);
	}

}
