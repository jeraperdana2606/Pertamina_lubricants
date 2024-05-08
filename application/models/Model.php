<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    ///Menu Laporan
    public function tampil_Infaq()
    {
        return $this->db->get('infaq');
    }

    public function tampil_jumat()
    {
        return $this->db->get('casjumat');
    }
    
    public function tampil_pengeluaran()
    {
        return $this->db->get('keluar');
    }

    // Menu Lainnya////
    
    public function tampil_ak()
    {
        return $this->db->get('alat_kebersihan');
        // $query = $this->db->query("select * from alat_kebersihan'");
		// return $query->result();
    }
    
    
    public function tampil_kendaraan()
    {
        return $this->db->get('kendaraan');
    }

    public function tampil_waqaf()
    {
        return $this->db->get('waqaf');
    }
    public function tampil_perpustakaan()
    {
        return $this->db->get('perpustakaan');
    }
}

    