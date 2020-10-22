<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	
	public function index()
	{
		//load dari folder view
		$this->load->view('mahasiswa/v_index');
	}
	
	public function create()
	{
		$this->load->view('mahasiswa/v_create');
	}
}