<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
		$this->load->model('Pendidikan_model');
		$this->load->model('Pengabdian_model');
		$this->load->model('Penelitian_model');
		$this->load->model('Seminar_model');
		$this->load->model('Kerjasama_model');
	}

	public function index()
	{
		$data['title'] = 'Home';

		$data['pendidikan'] = $this->Pendidikan_model->get_max_id_event();
		$data['artikel_pendidikan'] = $this->Pendidikan_model->get_max_id_artikel();

		$data['pengabdian'] = $this->Pengabdian_model->get_max_id_event();
		$data['artikel_pengabdian'] = $this->Pengabdian_model->get_max_id_artikel();

		$data['penelitian'] = $this->Penelitian_model->get_max_id_event();
		$data['artikel_penelitian'] = $this->Penelitian_model->get_max_id_artikel();

		$data['seminar'] = $this->Seminar_model->get_max_id_event();
		$data['artikel_seminar'] = $this->Seminar_model->get_max_id_artikel();

		$data['kerjasama'] = $this->Kerjasama_model->get_max_id_event();
		$data['artikel_kerjasama'] = $this->Kerjasama_model->get_max_id_artikel();

		$this->load->view('templates/header', $data);
		$this->load->view('v_home', $data);
		$this->load->view('templates/footer');
	}
}
