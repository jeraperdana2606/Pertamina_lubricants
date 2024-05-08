<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admincontrol extends CI_Controller {

	
		public function index()
	{
		$data['content'] = 'admin/conten';
		$this->load->view('admin/master', $data);
	}
}