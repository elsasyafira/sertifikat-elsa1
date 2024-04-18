<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class generate extends CI_Controller {

	
	public function index()
	{
		$this->load->view('vw_generate');
	}

	public function tambah_generate()
	{
		$this->load->view('vw_tambah_generate');
	}
}
