<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sertifikat extends CI_Controller {

	
	public function index()
	{
		$this->load->view('vw_sertifikat');
	}

	public function tambah_sertifikat()
	{
		$this->load->view('vw_tambah_sertifikat');
	}
}
