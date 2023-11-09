<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_seminar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Seminar_model');
	}

	public function index()
	{
		$data['title'] = 'seminar';
		$data['seminar'] = $this->Seminar_model->get_all_event();
		$data['artikel'] = $this->Seminar_model->get_all_artikel();
		$this->load->view('templates/header', $data);
		$this->load->view('seminar/v_seminar', $data);
		$this->load->view('templates/footer');
	}



	public function lihat_event_seminar($id_seminar)
	{ // Cek apakah pengguna sudah login
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('error', 'Maaf, anda belum login. Mohon login dahulu');
			redirect('c_login'); // Redirect ke halaman login jika belum login
		}
		// Cek apakah pengguna memiliki role sebagai admin
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		if (!$user) {
			$this->session->set_flashdata('error', 'Maaf, anda tidak bisa mengakses halaman ini. Silahkan login dengan benar.');
			redirect('c_login/login_untuk_melihat_event'); // Redirect ke halaman login jika bukan admin
		}
		$data['title'] = 'seminar - Event';
		$data['seminar'] = $this->Seminar_model->get_event($id_seminar);
		$this->load->view('templates/header_event', $data);
		$this->load->view('seminar/detail_event_seminar', $data);
		$this->load->view('templates/footer');
	}

	public function lihat_event_seminar_more()
	{ // Cek apakah pengguna sudah login
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('error', 'Maaf, anda belum login. Mohon login dahulu');
			redirect('c_login'); // Redirect ke halaman login jika belum login
		}
		// Cek apakah pengguna memiliki role sebagai admin
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		if (!$user) {
			$this->session->set_flashdata('error', 'Maaf, anda tidak bisa mengakses halaman ini. Silahkan login dengan benar.');
			redirect('c_login/login_untuk_melihat_event'); // Redirect ke halaman login jika bukan admin
		}

		if ($this->session->userdata('role') == "Admin") {
			redirect(base_url("index.php/admin/seminar_admin/c_seminar_admin/daftar_semua_event"));
		} elseif ($this->session->userdata('role') == "PPKG") {
			redirect(base_url("index.php/ppkg/seminar_ppkg/c_seminar_ppkg/daftar_semua_event"));
		} elseif ($this->session->userdata('role') == "Non-PPKG") {
			redirect(base_url("index.php/non_ppkg/seminar_non_ppkg/c_seminar_non_ppkg/daftar_semua_event"));
		}
	}

	public function lihat_artikel_seminar($id_seminar)
	{ // Cek apakah pengguna sudah login
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('error', 'Maaf, anda belum login. Mohon login dahulu');
			redirect('c_login'); // Redirect ke halaman login jika belum login
		}
		// Cek apakah pengguna memiliki role sebagai admin
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		if (!$user) {
			$this->session->set_flashdata('error', 'Maaf, anda tidak bisa mengakses halaman ini. Silahkan login dengan benar.');
			redirect('c_login/login_untuk_melihat_artikel'); // Redirect ke halaman login jika bukan admin
		}
		$data['title'] = 'seminar - Artikel';
		$data['artikel'] = $this->Seminar_model->get_artikel($id_seminar);
		//$data['komentar'] = $this->Artikel_pengabdian_model->get_comments($id_pengabdian);

		$this->load->view('templates/header_artikel', $data);
		$this->load->view('seminar/lihat_artikel_detail', $data);
		$this->load->view('templates/footer');
	}

	public function lihat_artikel_seminar_more()
	{ // Cek apakah pengguna sudah login
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('error', 'Maaf, anda belum login. Mohon login dahulu');
			redirect('c_login'); // Redirect ke halaman login jika belum login
		}
		// Cek apakah pengguna memiliki role sebagai admin
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		if (!$user) {
			$this->session->set_flashdata('error', 'Maaf, anda tidak bisa mengakses halaman ini. Silahkan login dengan benar.');
			redirect('c_login/login_untuk_melihat_artikel'); // Redirect ke halaman login jika bukan admin
		}

		if ($this->session->userdata('role') == "Admin") {
			redirect(base_url("index.php/admin/seminar_admin/c_seminar_admin/daftar_semua_artikel"));
		} elseif ($this->session->userdata('role') == "PPKG") {
			redirect(base_url("index.php/ppkg/seminar_ppkg/c_seminar_ppkg/daftar_semua_artikel"));
		} elseif ($this->session->userdata('role') == "Non-PPKG") {
			redirect(base_url("index.php/non_ppkg/seminar_non_ppkg/c_seminar_non_ppkg/daftar_semua_artikel"));
		}
	}
}
