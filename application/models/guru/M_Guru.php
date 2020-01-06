<?php

class M_Guru extends CI_Model
{
    function datadiri($where)
    {
        $this->db->select('*');
        $this->db->from('tb_guru tg');
        $this->db->join('tb_mapel tm', 'tg.id_mapel = tm.id_mapel');
        $this->db->where('tg.nip', $where);
        $query = $this->db->get();
        return $query->result_array();
    }
    function rombel($where)
    {
        $this->db->select('tk.kelas, tk.id_kelas, tm.mapel, tg.nama');
        $this->db->from('tb_materi tb_kd');
        $this->db->join('tb_guru tg', 'tg.nip = tb_kd.nip');
        $this->db->join('tb_kelas tk', 'tk.id_kelas = tb_kd.id_kelas');
        $this->db->join('tb_mapel tm', 'tg.id_mapel = tm.id_mapel');
        $this->db->group_by('tb_kd.id_kelas');
        $this->db->where('tb_kd.nip', $where);
        $query = $this->db->get();
        return $query->result_array();
    }

    function kd($kelas, $id_guru)
    {
        $this->db->select('*');
        $this->db->from('tb_materi');
        $this->db->where('tb_materi.id_kelas', $kelas);
        $this->db->where('tb_materi.nip', $id_guru);
        $this->db->order_by('status', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }
    function nilai($kd, $kelas)
    {
        $this->db->select('*');
        $this->db->from('tb_nilai tn');
        $this->db->join('tb_siswa ts', 'tn.id_siswa = ts.nis');
        $this->db->where('ts.kelas', $kelas);
        $this->db->where('tn.id_kd', $kd);
        $query = $this->db->get();
        return $query->result_array();
    }
    function datasiswa($where)
    {
        $this->db->select('*');
        $this->db->from('tb_siswa ts');
        $this->db->where('ts.kelas', $where);
        $query = $this->db->get();
        return $query->result_array();
    }
    function kd_last()
    {
        $this->db->select('tm.id_kd');
        $this->db->from('tb_materi tm');
        $this->db->order_by('tm.id_kd', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    function hapus_kd($id)
    {
        $this->db->where('id_kd', $id);
        $this->db->delete('tb_materi');
    }
    function hapus_siswa($id)
    {
        $this->db->where('id_kd', $id);
        $this->db->delete('tb_nilai');
    }

    function input_kd($table, $data)
    {
        $this->db->insert($table, $data);
    }
    function input_nilai($table, $data)
    {
        $this->db->insert($table, $data);
    }

    function countguru($where)
    {
        $query = $this->db->query('select * from tb_guru where id_mapel = (select id_mapel from tb_guru where nip = ' . $where . ')');
        return $query->result_array();
    }
    function countkelas()
    {
        $this->db->select('id_kelas');
        $this->db->from('tb_kelas');
        $query = $this->db->get();
        return $query->result_array();
    }

    function updatenilai($nis, $nilaisiswa, $id_kd)
    {
        $this->db->set('nilai', $nilaisiswa);
        $this->db->where('id_siswa', $nis);
        $this->db->where('id_kd', $id_kd);
        $this->db->update('tb_nilai');
    }

    function cekgurumapel($where){
        $query = $this->db->query('SELECT nip FROM tb_guru WHERE id_mapel = (SELECT id_mapel FROM tb_guru WHERE nip= '.$where.')');
        return $query->result_array();
    }
    function cekmateri($nip, $kelas){
        $query = $this->db->query("SELECT id_kelas FROM `tb_materi` WHERE nip IN (".implode(',', array_map('intval', $nip)).") AND id_kelas IN (".implode(',', array_map('intval', $kelas)).")");
        return $query->result_array();
    }
}
