<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function _construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library('form_validation');
		$this->load->model('Model');
	}
	public function index()
	{
		$data['content'] = 'menu/hal_utama';
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		//$this->load->view('template/banner',$data);
		$this->load->view('menu/hal_utama',$data);
		$this->load->view('template/footer', $data);
	}
	
	///Bagian Menu Agenda
	public function agenda()
	{
		$data['content'] = 'menu/agenda';
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		//$this->load->view('template/banner',$data);
		$this->load->view('menu/agenda',$data);
		$this->load->view('template/footer', $data);
	}
	
	public function jumat()
	{
		$data['content'] = 'menu/jumat';
		$this->load->view('template/master', $data);
	}
	
	public function rain()
	{
		$data['content'] = 'menu/rain';
		$this->load->view('template/master', $data);
	}
	
	public function Ikhwat()
	{
		$data['content'] = 'menu/ikhwat';
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/banner1', $data);
		$this->load->view('menu/ikhwat', $data);
		$this->load->view('template/footer', $data);
	}
	
	///Bagian Menu Laporan
	public function Infaq()
	{
		$data['content'] = 'menu/infaq';
		$this->load->model('Model');
		$data['infaq'] = $this->Model->tampil_Infaq()->result();
		$this->load->view('template/master',$data);
	}
	
	
	public function cashjumat()
	{
		$data['content'] = 'menu/cashjumat';
		$this->load->model('Model');
		$data['jumat'] = $this->Model->tampil_jumat()->result();
		$this->load->view('template/master', $data);
	}
	
	public function pengeluaran()
	{
		$data['content'] = 'menu/pengeluaran';
		$this->load->model('Model');
		$data['keluar'] = $this->Model->tampil_pengeluaran()->result();
		$this->load->view('template/master', $data);
	}
	
	///Bagian Menu Lainnya
	public function Inventarisir()
	{
		$data['content'] = 'menu/inventarisir';
		$this->load->view('template/master', $data);
	}


	public function lihat_ak()
	{
		$data['content'] = 'menu/kebersihan';
		$this->load->model('Model');
		$data['ak'] = $this->Model->tampil_ak()->result();
		$this->load->view('template/master',$data);
	}

	public function lihat_kendaraan()
	{
		$data['content'] = 'menu/kendaraan';
		$this->load->model('Model');
		$data['ak'] = $this->Model->tampil_kendaraan()->result();
		$this->load->view('template/master',$data);
	}
	
	public function lihat_waqaf()
	{
		$data['content'] = 'menu/waqaf';
		$this->load->model('Model');
		$data['waqaf'] = $this->Model->tampil_waqaf()->result();
		$this->load->view('template/master',$data);
	}

	///Bagian Pepustakaan
	public function Perpustakaan()
	{
		$data['content'] = 'menu/perpustakaan';
		$this->load->model('Model');
		$data['perpustakaan'] = $this->Model->tampil_perpustakaan()->result();
		$this->load->view('template/master',$data);
	}

	public function login()
	{
		$this->load->view('menu/login');
	}
}