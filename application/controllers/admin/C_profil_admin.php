<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_profil_admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_data");
		$this->load->library('form_validation');

		// Cek apakah pengguna sudah login
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('error', 'Maaf, anda belum login. Mohon login dahulu');
			redirect('c_login'); // Redirect ke halaman login jika belum login
		}
		// Cek apakah pengguna memiliki role sebagai admin
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		if (!$user || $user['role'] !== 'Admin') {
			$this->session->set_flashdata('error', 'Maaf, anda tidak bisa mengakses halaman admin. Silahkan login dengan benar.');
			redirect('c_login'); // Redirect ke halaman login jika bukan admin
		}
	}
	public function index()
	{
		$data['title'] = 'Admin - Profil';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['login'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('admin/_partials/header', $data);
		$this->load->view('admin/profil_admin', $data);

		$this->load->view('admin/_partials/footer');
	}

	function edit($id)
	{
		$data2['title'] = 'Admin - Edit Profil';
		$data1['user'] = $this->m_data->getById($id);
		$data2['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		// print_r($data2);
		$this->load->view('admin/_partials/header', $data2);
		$this->load->view('admin/edit_profil_admin', $data1);
		$this->load->view('admin/_partials/footer');
	}
	public function update($id_user)
	{
		// $data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('name', 'Nama Lengkap', 'required');

		if ($this->form_validation->run() == false) {

			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('admin/c_profil_admin/edit/' . $id_user));
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$no_hp = $this->input->post('no_hp');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$nia = $this->input->post('nia');
			$username = $this->input->post('username');
			$role = $this->input->post('role');
			$upload_image = $_FILES['avatar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = 5000;
				$config['max_width'] = 3048;
				$config['max_height'] = 3000;
				$config['upload_path'] = './uploads/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('avatar')) {
					$old_image = $data['user']['avatar'];
					if ($old_image != 'default.png') {

						$file_path = './uploads/' . $old_image;
						if (is_writable($file_path)) {
							if (file_exists($file_path)) {
								unlink(FCPATH . $file_path);
							}
						}
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('avatar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->db->set('name', $name);
			$this->db->set('email', $email);
			$this->db->set('username', $username);
			$this->db->set('role', $role);
			$this->db->set('no_hp', $no_hp);
			$this->db->set('nia', $nia);
			$this->db->set('jenis_kelamin', $jenis_kelamin);
			$this->db->where('email', $email);
			$this->db->update('user');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">your profile has been updated!</div> ');
			redirect('admin/c_profil_admin');
		}
	}
}
