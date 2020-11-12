<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mahasiswa');
	}

	
	public function index()
	{
		$data['tabel'] = $this->M_mahasiswa->semuaData();
		//variable dummie untuk cek data dari $data
		//var_dump($data);
		//die();

		//load dari folder view
		$this->load->view('mahasiswa/v_index', $data);
	}
	
	public function create()
	{
		$this->load->view('mahasiswa/v_create');
	}

	public function tambah()
	{
		$this->load->view('add_mhs');
	}
}