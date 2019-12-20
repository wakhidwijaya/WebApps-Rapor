<?php

class M_Siswa extends CI_Model
{
    public function nilai()
    {
        return $this->db->get('tb_nilai')
            ->result();
    }

    public function get_siswa()
    {
        $query = $this->db->query('SELECT * FROM tb_siswa where kelas=1');
        return $query->result_array();
    }
}
