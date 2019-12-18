<?php

class M_Siswa extends CI_Model
{
    public function nilai(){
        return $this->db->get('tb_nilai')
        ->result();
    }

}
