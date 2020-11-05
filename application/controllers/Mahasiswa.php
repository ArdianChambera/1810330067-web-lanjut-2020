<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	
	public function index()
	{
		//load dari folder view
		$data ['nama_lengkap'] = "Chambera"
		$data ['jenis_kelamin'] = "Laki"
		$mahasiswa[0] = array(
			'nim' => 1810330067
			'nama' => 'Chambera'
			'profil' => 'Data Diri'
		);
		$data['mahasiswa'] = $mahasiswa;
		$this->load->view('mahasiswa/v_index',$data);
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