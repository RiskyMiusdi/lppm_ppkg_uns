<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_kerjasama extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kerjasama_model');
		// $this->load->model('Artikel_kerjasama_model');
	}

	public function index()
	{
		$data['title'] = 'kerjasama';
		$data['kerjasama'] = $this->Kerjasama_model->get_all_event();
		$data['artikel'] = $this->Kerjasama_model->get_all_artikel();

		// $data['artikel'] = $this->Artikel_kerjasama_model->get_all_artikel_kerjasama();
		$this->load->view('templates/header', $data);
		$this->load->view('kerjasama/v_kerjasama', $data);
		$this->load->view('templates/footer');
	}



	public function lihat_event_kerjasama($id_kerjasama)
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
		$data['title'] = 'kerjasama - Event';
		$data['kerjasama'] = $this->Kerjasama_model->get_event($id_kerjasama);
		$this->load->view('templates/header_event', $data);
		$this->load->view('kerjasama/detail_event_kerjasama', $data);
		$this->load->view('templates/footer');
	}

	public function lihat_event_kerjasama_more()
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
			redirect(base_url("index.php/admin/kerjasama_admin/c_kerjasama_admin/daftar_semua_event"));
		} elseif ($this->session->userdata('role') == "PPKG") {
			redirect(base_url("index.php/ppkg/kerjasama_ppkg/c_kerjasama_ppkg/daftar_semua_event"));
		} elseif ($this->session->userdata('role') == "Non-PPKG") {
			redirect(base_url("index.php/non_ppkg/kerjasama_non_ppkg/c_kerjasama_non_ppkg/daftar_semua_event"));
		}
	}

	public function lihat_artikel_kerjasama($id_kerjasama)
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
		$data['title'] = 'kerjasama - Artikel';
		$data['artikel'] = $this->Kerjasama_model->get_artikel($id_kerjasama);


		$this->load->view('templates/header_artikel', $data);
		$this->load->view('kerjasama/lihat_artikel_detail', $data);
		$this->load->view('templates/footer');
	}

	public function lihat_artikel_kerjasama_more()
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
			redirect(base_url("index.php/admin/kerjasama_admin/c_kerjasama_admin/daftar_semua_artikel"));
		} elseif ($this->session->userdata('role') == "PPKG") {
			redirect(base_url("index.php/ppkg/kerjasama_ppkg/c_kerjasama_ppkg/daftar_semua_artikel"));
		} elseif ($this->session->userdata('role') == "Non-PPKG") {
			redirect(base_url("index.php/non_ppkg/kerjasama_non_ppkg/c_kerjasama_non_ppkg/daftar_semua_artikel"));
		}
	}
}
