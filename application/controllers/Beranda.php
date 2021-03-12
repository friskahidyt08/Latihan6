<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

	public function index()
	{
		$data['nama_website'] = "BOOTCAMP 2021";
		$this->load->view('header', $data);
		$this->load->view('beranda');
		$this->load->view('footer');
	}
}
