<?php

class logincontrol extends CI_Controller
{

	public function __construct()
	{
	
		parent::__construct();//untuk memanggil method construct yang ada di ci controller
		$this->load->library('form_validation');
	}
		public function index(){
			$this->form_validation->set_rules('name','Nama','required|trim');
			$this->form_validation->set_rules('password','Password','required|trim');
			if($this->form_validation->run()==false){
			$this->load->view('menu/login');	
			}else{
				//validasi sukses
				$this->login();
			}
			
		}
		private function login()
		{
			$nama=$this->input->post('name');
			$password=$this->input->post('password');
	
			$admin=$this->db->get_where('admin',['name'=>$nama])->row_array();
			$admin=$this->db->get_where('admin',['password'=>$password])->row_array();
			//jika usernya ada
			if ($admin) {
			redirect('admincontrol');	
			}else{
				 $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">username/password belum terdaftar</div>');
					  redirect('logincontrol/index');
			}
		}
}