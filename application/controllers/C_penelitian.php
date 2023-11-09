<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_penelitian extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Penelitian_model');
	}

	public function index()
	{
		$data['title'] = 'Penelitian';
		$data['penelitian'] = $this->Penelitian_model->get_all_event();
		$data['artikel'] = $this->Penelitian_model->get_all_artikel();
		$this->load->view('templates/header', $data);
		$this->load->view('penelitian/v_penelitian', $data);
		$this->load->view('templates/footer');
	}



	public function lihat_event_penelitian($id_penelitian)
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
		$data['title'] = 'penelitian - Event';
		$data['penelitian'] = $this->Penelitian_model->get_event($id_penelitian);
		$this->load->view('templates/header_event', $data);
		$this->load->view('penelitian/detail_event_penelitian', $data);
		$this->load->view('templates/footer');
	}


	public function lihat_event_penelitian_more()
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
			redirect(base_url("index.php/admin/penelitian_admin/c_penelitian_admin/daftar_semua_event"));
		} elseif ($this->session->userdata('role') == "PPKG") {
			redirect(base_url("index.php/ppkg/penelitian_ppkg/c_penelitian_ppkg/daftar_semua_event"));
		} elseif ($this->session->userdata('role') == "Non-PPKG") {
			redirect(base_url("index.php/non_ppkg/penelitian_non_ppkg/c_penelitian_non_ppkg/daftar_semua_event"));
		}
	}



	public function lihat_artikel_penelitian($id_penelitian)
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
		$data['title'] = 'penelitian - Artikel';
		$data['artikel'] = $this->Penelitian_model->get_artikel($id_penelitian);

		$this->load->view('templates/header_artikel', $data);
		$this->load->view('penelitian/lihat_artikel_detail', $data);
		$this->load->view('templates/footer');
	}


	public function lihat_artikel_penelitian_more()
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
			redirect(base_url("index.php/admin/penelitian_admin/c_penelitian_admin/daftar_semua_artikel"));
		} elseif ($this->session->userdata('role') == "PPKG") {
			redirect(base_url("index.php/ppkg/penelitian_ppkg/c_penelitian_ppkg/daftar_semua_artikel"));
		} elseif ($this->session->userdata('role') == "Non-PPKG") {
			redirect(base_url("index.php/non_ppkg/penelitian_non_ppkg/c_penelitian_non_ppkg/daftar_semua_artikel"));
		}
	}
}
