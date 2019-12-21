<?php

class M_Siswa extends CI_Model
{
    public function nilai()
    {
        return $this->db->get('tb_nilai')
            ->result();
    }

    public function get_siswa($id)
    {
        $this->db->select('*');
        $this->db->from('tb_siswa ts');
        $this->db->where('ts.nis', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
}
