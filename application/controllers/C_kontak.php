<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_kontak extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Kontak';
		$this->load->view('templates/header', $data);
		$this->load->view('v_kontak');
		$this->load->view('templates/footer');
	}
}
