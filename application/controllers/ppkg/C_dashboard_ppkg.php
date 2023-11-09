<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard_ppkg extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_data");
		$this->load->model('User_model');
		$this->load->library('form_validation');

		// Cek apakah pengguna sudah login
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('error', 'Maaf, anda belum login. Mohon login dahulu');
			redirect('c_login'); // Redirect ke halaman login jika belum login
		}
		// Cek apakah pengguna memiliki role sebagai ppkg
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		if (!$user || $user['role'] !== 'PPKG') {
			$this->session->set_flashdata('error', 'Maaf, anda tidak bisa mengakses halaman ppkg. Silahkan login dengan benar.');
			redirect('c_login'); // Redirect ke halaman login jika bukan ppkg
		}
	}

	public function index()
	{
		$data1['title'] = 'ppkg - Dashboard';
		$table_name = 'user';
		$table_event_pendidikan = 'tbl_event_pendidikan';
		$table_artikel_pendidikan = 'tbl_artikel_pendidikan';
		$table_event_pengabdian = 'tbl_event_pengabdian';
		$table_artikel_pengabdian = 'tbl_artikel_pengabdian';
		$table_event_penelitian = 'tbl_event_penelitian';
		$table_artikel_penelitian = 'tbl_artikel_penelitian';
		$table_event_seminar = 'tbl_event_seminar';
		$table_artikel_seminar = 'tbl_artikel_seminar';
		$table_event_kerjasama = 'tbl_event_kerjasama';
		$table_artikel_kerjasama = 'tbl_artikel_kerjasama';
		$data['total_user'] = $this->User_model->count_rows($table_name);
		$data['total_user_ppkg'] = $this->User_model->count_ppkg_rows();
		$data['total_user_non_ppkg'] = $this->User_model->count_non_ppkg_rows();
		$data['total_event_pendidikan'] = $this->User_model->count_event_pendidikan_rows($table_event_pendidikan);
		$data['total_artikel_pendidikan'] = $this->User_model->count_artikel_pendidikan_rows($table_artikel_pendidikan);
		$data['total_event_pengabdian'] = $this->User_model->count_event_pengabdian_rows($table_event_pengabdian);
		$data['total_artikel_pengabdian'] = $this->User_model->count_artikel_pengabdian_rows($table_artikel_pengabdian);
		$data['total_event_penelitian'] = $this->User_model->count_event_penelitian_rows($table_event_penelitian);
		$data['total_artikel_penelitian'] = $this->User_model->count_artikel_penelitian_rows($table_artikel_penelitian);
		$data['total_event_seminar'] = $this->User_model->count_event_seminar_rows($table_event_seminar);
		$data['total_artikel_seminar'] = $this->User_model->count_artikel_seminar_rows($table_artikel_seminar);
		$data['total_event_kerjasama'] = $this->User_model->count_event_kerjasama_rows($table_event_kerjasama);
		$data['total_artikel_kerjasama'] = $this->User_model->count_artikel_kerjasama_rows($table_artikel_kerjasama);
		$data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('ppkg/_partials/header', $data1);
		$this->load->view('ppkg/dashboard_ppkg', $data);
		$this->load->view('ppkg/_partials/footer');
	}
}
