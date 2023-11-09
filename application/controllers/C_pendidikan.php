<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_pendidikan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pendidikan_model');
	}

	public function index()
	{
		$data['title'] = 'Pendidikan';
		$data['pendidikan'] = $this->Pendidikan_model->get_all_event();
		$data['artikel'] = $this->Pendidikan_model->get_all_artikel();
		$this->load->view('templates/header', $data);
		$this->load->view('pendidikan/v_pendidikan', $data);
		$this->load->view('templates/footer');
	}
	public function lihat_event_pendidikan($id_pendidikan)
	{ // Cek apakah pengguna sudah login
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('error', 'Maaf, anda belum login. Mohon login dahulu');
			redirect('c_login'); // Redirect ke halaman login jika belum login
		}
		// Cek apakah pengguna memiliki role sebagai admin
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		if (!$user) {
			$this->session->set_flashdata('error', 'Maaf, anda tidak bisa mengakses halaman ini. Silahkan login dengan benar.');
			redirect('c_login/login_untuk_melihat_event');
		}
		$data['title'] = 'Pendidikan - Event';
		$data['pendidikan'] = $this->Pendidikan_model->get_event($id_pendidikan);
		$this->load->view('templates/header_event', $data);
		$this->load->view('pendidikan/detail_event_pendidikan', $data);
		$this->load->view('templates/footer');
	}

	public function lihat_event_pendidikan_more()
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
			redirect(base_url("index.php/admin/pendidikan_admin/c_pendidikan_admin/daftar_semua_event"));
		} elseif ($this->session->userdata('role') == "PPKG") {
			redirect(base_url("index.php/ppkg/pendidikan_ppkg/c_pendidikan_ppkg/daftar_semua_event"));
		} elseif ($this->session->userdata('role') == "Non-PPKG") {
			redirect(base_url("index.php/non_ppkg/pendidikan_non_ppkg/c_pendidikan_non_ppkg/daftar_semua_event"));
		}
	}

	public function lihat_artikel_pendidikan($id_pendidikan)
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
		$data['title'] = 'Pendidikan - Artikel';
		$data['artikel'] = $this->Pendidikan_model->get_artikel($id_pendidikan);
		$this->load->view('templates/header_artikel', $data);
		$this->load->view('pendidikan/lihat_artikel_detail', $data);
		$this->load->view('templates/footer');
	}

	public function lihat_artikel_pendidikan_more()
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
			redirect(base_url("index.php/admin/pendidikan_admin/c_pendidikan_admin/daftar_semua_artikel"));
		} elseif ($this->session->userdata('role') == "PPKG") {
			redirect(base_url("index.php/ppkg/pendidikan_ppkg/c_pendidikan_ppkg/daftar_semua_artikel"));
		} elseif ($this->session->userdata('role') == "Non-PPKG") {
			redirect(base_url("index.php/non_ppkg/pendidikan_non_ppkg/c_pendidikan_non_ppkg/daftar_semua_artikel"));
		}
	}
}
