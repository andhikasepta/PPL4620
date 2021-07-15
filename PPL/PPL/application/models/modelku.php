<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelku extends CI_Model {

	public function getData($tabel)
	{
        $data = $this->db->get($tabel);
        return $data->result_array();
    }
    
    public function masukkan($tabel,$data)
    {
        $data = $this->db->insert($tabel,$data);
        return $this->db->insert_id();
    }

    public function hapus($tabel,$where)
    {
        $data = $this->db->delete($tabel,$where);
        return $data;
    }

    public function perbarui($tabel,$data,$where)
    {
        $data = $this->db->update($tabel,$data,$where);
        return $data;
    }

    public function getData_khusus($tabel,$where)
	{
        $data = $this->db->get_where($tabel,$where);
        return $data->result_array();
    }
    
    // public function search($tabel, $key){
    //     $data = $this->db->get_where($tabel,$where);
    //     return $data->result_array();
    // }
    
    // public function get_tamu_keyword($keyword){
    //     $this->db->select('*');
    //     $this->db->from('tamu');
    //     $this->db->like('kode_tamu', $keyword);
    //     $this->db->or_like('no', $keyword);
    //     $this->db->or_like('jenis', $keyword);
    //     $this->db->or_like('nik', $keyword);
    //     $this->db->or_like('nama', $keyword);
    //     $this->db->or_like('alamat', $keyword);
    //     $this->db->or_like('telp', $keyword);
    //     return $this->db->get()->result();
    // }
}
?>