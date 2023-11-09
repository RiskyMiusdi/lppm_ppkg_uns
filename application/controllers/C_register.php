<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_register extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$data['title'] = 'Register';
		$this->load->view('templates/header', $data);
		$this->load->view('v_register');
		$this->load->view('templates/footer');
	}

	public function proses()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[1]|max_length[255]|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[1]|max_length[255]|is_unique[user.email]|valid_email');
		$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('role', 'Role', 'trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');
			$email = $this->input->post('email');
			$name = $this->input->post('name');
			$avatar = 'default.png';
			$this->auth->register($username, $password, $role, $email, $name, $avatar);
			$this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
			redirect('c_login/index');
		} else {

			$this->session->set_flashdata('error', validation_errors());
			redirect('c_register');
		}
	}
}
