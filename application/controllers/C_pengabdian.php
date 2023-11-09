<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_pengabdian extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengabdian_model');
	}

	public function index()
	{
		$data['title'] = 'Pengabdian';
		$data['pengabdian'] = $this->Pengabdian_model->get_all_event();
		$data['artikel'] = $this->Pengabdian_model->get_all_artikel();
		$this->load->view('templates/header', $data);
		$this->load->view('pengabdian/v_pengabdian', $data);
		$this->load->view('templates/footer');
	}

	public function lihat_event_pengabdian($id_pengabdian)
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
		$data['title'] = 'pengabdian - Event';
		$data['pengabdian'] = $this->Pengabdian_model->get_event($id_pengabdian);
		$this->load->view('templates/header_event', $data);
		$this->load->view('pengabdian/detail_event_pengabdian', $data);
		$this->load->view('templates/footer');
	}

	public function lihat_event_pengabdian_more()
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
			redirect(base_url("index.php/admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_event"));
		} elseif ($this->session->userdata('role') == "PPKG") {
			redirect(base_url("index.php/ppkg/pengabdian_ppkg/c_pengabdian_ppkg/daftar_semua_event"));
		} elseif ($this->session->userdata('role') == "Non-PPKG") {
			redirect(base_url("index.php/non_ppkg/pengabdian_non_ppkg/c_pengabdian_non_ppkg/daftar_semua_event"));
		}
	}

	public function lihat_artikel_pengabdian($id_pengabdian)
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
		$data['title'] = 'pengabdian - Artikel';
		$data['artikel'] = $this->Pengabdian_model->get_artikel($id_pengabdian);


		$this->load->view('templates/header_artikel', $data);
		$this->load->view('pengabdian/lihat_artikel_detail', $data);
		$this->load->view('templates/footer');
	}

	public function lihat_artikel_pengabdian_more()
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
			redirect(base_url("index.php/admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_artikel"));
		} elseif ($this->session->userdata('role') == "PPKG") {
			redirect(base_url("index.php/ppkg/pengabdian_ppkg/c_pengabdian_ppkg/daftar_semua_artikel"));
		} elseif ($this->session->userdata('role') == "Non-PPKG") {
			redirect(base_url("index.php/non_ppkg/pengabdian_non_ppkg/c_pengabdian_non_ppkg/daftar_semua_artikel"));
		}
	}
}
