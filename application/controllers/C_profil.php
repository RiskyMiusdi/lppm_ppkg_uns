<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_profil extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Profil';
		$this->load->view('templates/header', $data);
		$this->load->view('v_profil');
		$this->load->view('templates/footer');
	}
}
