<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
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
		$data['title'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('v_login', $data);
		$this->load->view('templates/footer');
	}
	public function proses()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');
			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					redirect(base_url("index.php/admin/c_dashboard_admin"));
				} elseif ($this->session->userdata('role') == "PPKG") {
					redirect(base_url("index.php/ppkg/c_dashboard_ppkg"));
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					redirect(base_url("index.php/non_ppkg/c_dashboard_non_ppkg"));
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					redirect('c_login');
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect('c_login');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect('c_login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('c_login');
	}


	//Pendidikan
	public function login_untuk_melihat_event_pendidikan($id_konten)
	{
		$data['title'] = 'Login';
		$datax['event'] = $this->Pendidikan_model->get_event($id_konten);
		$this->load->view('templates/header', $data);
		$this->load->view('pendidikan/v_login_untuk_melihat_event_pendidikan', $datax);
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_event_pendidikan($id_konten)
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					if ($id_konten) {
						redirect(site_url('c_pendidikan/lihat_event_pendidikan/' . $id_konten));
					} else {
						redirect(base_url("index.php/admin/c_dashboard_admin"));
					}
				} elseif ($this->session->userdata('role') == "PPKG") {
					if ($id_konten) {
						redirect(site_url('c_pendidikan/lihat_event_pendidikan/' . $id_konten));
					} else {
						redirect(base_url("index.php/ppkg/c_dashboard_ppkg"));
					}
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					if ($id_konten) {
						redirect(site_url('c_pendidikan/lihat_event_pendidikan/' . $id_konten));
					} else {

						redirect(base_url("index.php/non_ppkg/c_dashboard_non_ppkg"));
					}
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					// redirect('c_login/login_untuk_melihat_event');
					redirect(site_url('c_login/login_untuk_melihat_event_pendidikan/' . $id_konten));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_event_pendidikan/' . $id_konten));
				// redirect('c_login/login_untuk_melihat_event');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_event_pendidikan/' . $id_konten));
			// redirect('c_login/login_untuk_melihat_event');
		}
	}


	public function login_untuk_melihat_artikel_pendidikan($id_konten)
	{
		$data['title'] = 'Login';
		$datax['event'] = $this->Pendidikan_model->get_artikel($id_konten);
		$this->load->view('templates/header', $data);
		$this->load->view('pendidikan/v_login_untuk_melihat_artikel_pendidikan', $datax);
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_artikel_pendidikan($id_konten)
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					if ($id_konten) {
						redirect(site_url('c_pendidikan/lihat_artikel_pendidikan/' . $id_konten));
					} else {
						redirect(base_url("index.php/admin/c_dashboard_admin"));
					}
				} elseif ($this->session->userdata('role') == "PPKG") {
					if ($id_konten) {
						redirect(site_url('c_pendidikan/lihat_artikel_pendidikan/' . $id_konten));
					} else {

						redirect(base_url("index.php/ppkg/c_dashboard_ppkg"));
					}
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					if ($id_konten) {
						redirect(site_url('c_pendidikan/lihat_artikel_pendidikan/' . $id_konten));
					} else {


						redirect(base_url("index.php/non_ppkg/c_dashboard_non_ppkg"));
					}
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					redirect(site_url('c_login/login_untuk_melihat_artikel_pendidikan/' . $id_konten));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_artikel_pendidikan/' . $id_konten));
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_artikel_pendidikan/' . $id_konten));
		}
	}

	public function login_untuk_melihat_event_pendidikan_more()
	{
		$data['title'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('pendidikan/v_login_untuk_melihat_event_pendidikan_more');
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_event_pendidikan_more()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					redirect(base_url("index.php/admin/pendidikan_admin/c_pendidikan_admin/daftar_semua_event"));
				} elseif ($this->session->userdata('role') == "PPKG") {
					redirect(base_url("index.php/ppkg/pendidikan_ppkg/c_pendidikan_ppkg/daftar_semua_event"));
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					redirect(base_url("index.php/non_ppkg/pendidikan_non_ppkg/c_pendidikan_non_ppkg/daftar_semua_event"));
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					// redirect('c_login/login_untuk_melihat_event');
					redirect(site_url('c_login/login_untuk_melihat_event_pendidikan_more/'));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_event_pendidikan_more/'));
				// redirect('c_login/login_untuk_melihat_event');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_event_pendidikan_more/'));
			// redirect('c_login/login_untuk_melihat_event');
		}
	}

	public function login_untuk_melihat_artikel_pendidikan_more()
	{
		$data['title'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('pendidikan/v_login_untuk_melihat_artikel_pendidikan_more');
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_artikel_pendidikan_more()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					redirect(base_url("index.php/admin/pendidikan_admin/c_pendidikan_admin/daftar_semua_artikel"));
				} elseif ($this->session->userdata('role') == "PPKG") {
					redirect(base_url("index.php/ppkg/pendidikan_ppkg/c_pendidikan_ppkg/daftar_semua_artikel"));
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					redirect(base_url("index.php/non_ppkg/pendidikan_non_ppkg/c_pendidikan_non_ppkg/daftar_semua_artikel"));
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					redirect(site_url('c_login/login_untuk_melihat_artikel_pendidikan_more/'));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_artikel_pendidikan_more/'));
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_artikel_pendidikan_more/'));
		}
	}
	// end -pendidikan

	//Pengabdian
	public function login_untuk_melihat_event_pengabdian($id_konten)
	{
		$data['title'] = 'Login';
		$datax['event'] = $this->Pengabdian_model->get_event($id_konten);
		$this->load->view('templates/header', $data);
		$this->load->view('pengabdian/v_login_untuk_melihat_event_pengabdian', $datax);
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_event_pengabdian($id_konten)
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					if ($id_konten) {
						redirect(site_url('c_pengabdian/lihat_event_pengabdian/' . $id_konten));
					} else {
						redirect(base_url("index.php/admin/c_dashboard_admin"));
					}
				} elseif ($this->session->userdata('role') == "PPKG") {
					if ($id_konten) {
						redirect(site_url('c_pengabdian/lihat_event_pengabdian/' . $id_konten));
					} else {
						redirect(base_url("index.php/ppkg/c_dashboard_ppkg"));
					}
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					if ($id_konten) {
						redirect(site_url('c_pengabdian/lihat_event_pengabdian/' . $id_konten));
					} else {

						redirect(base_url("index.php/non_ppkg/c_dashboard_non_ppkg"));
					}
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					// redirect('c_login/login_untuk_melihat_event');
					redirect(site_url('c_login/login_untuk_melihat_event_pengabdian/' . $id_konten));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_event_pengabdian/' . $id_konten));
				// redirect('c_login/login_untuk_melihat_event_pengabdian');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_event_pengabdian/' . $id_konten));
			// redirect('c_login/login_untuk_melihat_event_pengabdian');
		}
	}


	public function login_untuk_melihat_artikel_pengabdian($id_konten)
	{
		$data['title'] = 'Login';
		$datax['event'] = $this->Pengabdian_model->get_artikel($id_konten);
		$this->load->view('templates/header', $data);
		$this->load->view('pengabdian/v_login_untuk_melihat_artikel_pengabdian', $datax);
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_artikel_pengabdian($id_konten)
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					if ($id_konten) {
						redirect(site_url('c_pengabdian/lihat_artikel_pengabdian/' . $id_konten));
					} else {
						redirect(base_url("index.php/admin/c_dashboard_admin"));
					}
				} elseif ($this->session->userdata('role') == "PPKG") {
					if ($id_konten) {
						redirect(site_url('c_pengabdian/lihat_artikel_pengabdian/' . $id_konten));
					} else {

						redirect(base_url("index.php/ppkg/c_dashboard_ppkg"));
					}
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					if ($id_konten) {
						redirect(site_url('c_pengabdian/lihat_artikel_pengabdian/' . $id_konten));
					} else {


						redirect(base_url("index.php/non_ppkg/c_dashboard_non_ppkg"));
					}
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					redirect(site_url('c_login/login_untuk_melihat_artikel_pengabdian/' . $id_konten));
					// redirect('c_login/login_untuk_melihat_artikel_pengabdian');
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_artikel_pengabdian/' . $id_konten));
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_artikel_pengabdian/' . $id_konten));
		}
	}

	public function login_untuk_melihat_event_pengabdian_more()
	{
		$data['title'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('pengabdian/v_login_untuk_melihat_event_pengabdian_more');
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_event_pengabdian_more()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					redirect(base_url("index.php/admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_event"));
				} elseif ($this->session->userdata('role') == "PPKG") {
					redirect(base_url("index.php/ppkg/pengabdian_ppkg/c_pengabdian_ppkg/daftar_semua_event"));
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					redirect(base_url("index.php/non_ppkg/pengabdian_non_ppkg/c_pengabdian_non_ppkg/daftar_semua_event"));
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					// redirect('c_login/login_untuk_melihat_event');
					redirect(site_url('c_login/login_untuk_melihat_event_pengabdian_more/'));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_event_pengabdian_more/'));
				// redirect('c_login/login_untuk_melihat_event');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_event_pengabdian_more/'));
			// redirect('c_login/login_untuk_melihat_event');
		}
	}

	public function login_untuk_melihat_artikel_pengabdian_more()
	{
		$data['title'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('pengabdian/v_login_untuk_melihat_artikel_pengabdian_more');
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_artikel_pengabdian_more()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					redirect(base_url("index.php/admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_artikel"));
				} elseif ($this->session->userdata('role') == "PPKG") {
					redirect(base_url("index.php/ppkg/pengabdian_ppkg/c_pengabdian_ppkg/daftar_semua_artikel"));
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					redirect(base_url("index.php/non_ppkg/pengabdian_non_ppkg/c_pengabdian_non_ppkg/daftar_semua_artikel"));
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					redirect(site_url('c_login/login_untuk_melihat_artikel_pengabdian_more/'));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_artikel_pengabdian_more/'));
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_artikel_pengabdian_more/'));
		}
	}
	// end - pengabdian


	//Penelitian
	public function login_untuk_melihat_event_penelitian($id_konten)
	{
		$data['title'] = 'Login';
		$datax['event'] = $this->Penelitian_model->get_event($id_konten);
		$this->load->view('templates/header', $data);
		$this->load->view('penelitian/v_login_untuk_melihat_event_penelitian', $datax);
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_event_penelitian($id_konten)
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					if ($id_konten) {
						redirect(site_url('c_penelitian/lihat_event_penelitian/' . $id_konten));
					} else {
						redirect(base_url("index.php/admin/c_dashboard_admin"));
					}
				} elseif ($this->session->userdata('role') == "PPKG") {
					if ($id_konten) {
						redirect(site_url('c_penelitian/lihat_event_penelitian/' . $id_konten));
					} else {
						redirect(base_url("index.php/ppkg/c_dashboard_ppkg"));
					}
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					if ($id_konten) {
						redirect(site_url('c_penelitian/lihat_event_penelitian/' . $id_konten));
					} else {

						redirect(base_url("index.php/non_ppkg/c_dashboard_non_ppkg"));
					}
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					// redirect('c_login/login_untuk_melihat_event');
					redirect(site_url('c_login/login_untuk_melihat_event_penelitian/' . $id_konten));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_event_penelitian/' . $id_konten));
				// redirect('c_login/login_untuk_melihat_event_penelitian');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_event_penelitian/' . $id_konten));
			// redirect('c_login/login_untuk_melihat_event');
		}
	}


	public function login_untuk_melihat_artikel_penelitian($id_konten)
	{
		$data['title'] = 'Login';
		$datax['event'] = $this->Penelitian_model->get_artikel($id_konten);
		$this->load->view('templates/header', $data);
		$this->load->view('penelitian/v_login_untuk_melihat_artikel_penelitian', $datax);
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_artikel_penelitian($id_konten)
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					if ($id_konten) {
						redirect(site_url('c_penelitian/lihat_artikel_penelitian/' . $id_konten));
					} else {
						redirect(base_url("index.php/admin/c_dashboard_admin"));
					}
				} elseif ($this->session->userdata('role') == "PPKG") {
					if ($id_konten) {
						redirect(site_url('c_penelitian/lihat_artikel_penelitian/' . $id_konten));
					} else {

						redirect(base_url("index.php/ppkg/c_dashboard_ppkg"));
					}
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					if ($id_konten) {
						redirect(site_url('c_penelitian/lihat_artikel_penelitian/' . $id_konten));
					} else {


						redirect(base_url("index.php/non_ppkg/c_dashboard_non_ppkg"));
					}
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					// redirect('c_login/login_untuk_melihat_artikel_penelitian');
					redirect(site_url('c_login/login_untuk_melihat_artikel_pengabdian/' . $id_konten));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_artikel_pengabdian/' . $id_konten));
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_artikel_pengabdian/' . $id_konten));
		}
	}


	public function login_untuk_melihat_event_penelitian_more()
	{
		$data['title'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('penelitian/v_login_untuk_melihat_event_penelitian_more');
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_event_penelitian_more()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					redirect(base_url("index.php/admin/penelitian_admin/c_penelitian_admin/daftar_semua_event"));
				} elseif ($this->session->userdata('role') == "PPKG") {
					redirect(base_url("index.php/ppkg/penelitian_ppkg/c_penelitian_ppkg/daftar_semua_event"));
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					redirect(base_url("index.php/non_ppkg/penelitian_non_ppkg/c_penelitian_non_ppkg/daftar_semua_event"));
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					// redirect('c_login/login_untuk_melihat_event');
					redirect(site_url('c_login/login_untuk_melihat_event_penelitian_more/'));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_event_penelitian_more/'));
				// redirect('c_login/login_untuk_melihat_event');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_event_penelitian_more/'));
			// redirect('c_login/login_untuk_melihat_event');
		}
	}

	public function login_untuk_melihat_artikel_penelitian_more()
	{
		$data['title'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('penelitian/v_login_untuk_melihat_artikel_penelitian_more');
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_artikel_penelitian_more()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					redirect(base_url("index.php/admin/penelitian_admin/c_penelitian_admin/daftar_semua_artikel"));
				} elseif ($this->session->userdata('role') == "PPKG") {
					redirect(base_url("index.php/ppkg/penelitian_ppkg/c_penelitian_ppkg/daftar_semua_artikel"));
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					redirect(base_url("index.php/non_ppkg/penelitian_non_ppkg/c_penelitian_non_ppkg/daftar_semua_artikel"));
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					redirect(site_url('c_login/login_untuk_melihat_artikel_penelitian_more/'));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_artikel_penelitian_more/'));
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_artikel_penelitian_more/'));
		}
	}
	// end - penelitian


	//Seminar
	public function login_untuk_melihat_event_seminar($id_konten)
	{
		$data['title'] = 'Login';
		$datax['event'] = $this->Seminar_model->get_event($id_konten);
		$this->load->view('templates/header', $data);
		$this->load->view('seminar/v_login_untuk_melihat_event_seminar', $datax);
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_event_seminar($id_konten)
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					if ($id_konten) {
						redirect(site_url('c_seminar/lihat_event_seminar/' . $id_konten));
					} else {
						redirect(base_url("index.php/admin/c_dashboard_admin"));
					}
				} elseif ($this->session->userdata('role') == "PPKG") {
					if ($id_konten) {
						redirect(site_url('c_seminar/lihat_event_seminar/' . $id_konten));
					} else {
						redirect(base_url("index.php/ppkg/c_dashboard_ppkg"));
					}
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					if ($id_konten) {
						redirect(site_url('c_seminar/lihat_event_seminar/' . $id_konten));
					} else {

						redirect(base_url("index.php/non_ppkg/c_dashboard_non_ppkg"));
					}
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					// redirect('c_login/login_untuk_melihat_event');
					redirect(site_url('c_login/login_untuk_melihat_event_seminar/' . $id_konten));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_event_seminar/' . $id_konten));
				// redirect('c_login/login_untuk_melihat_event_seminar');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_event_seminar/' . $id_konten));
			// redirect('c_login/login_untuk_melihat_event');
		}
	}


	public function login_untuk_melihat_artikel_seminar($id_konten)
	{
		$data['title'] = 'Login';
		$datax['event'] = $this->Seminar_model->get_artikel($id_konten);
		$this->load->view('templates/header', $data);
		$this->load->view('seminar/v_login_untuk_melihat_artikel_seminar', $datax);
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_artikel_seminar($id_konten)
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					if ($id_konten) {
						redirect(site_url('c_seminar/lihat_artikel_seminar/' . $id_konten));
					} else {
						redirect(base_url("index.php/admin/c_dashboard_admin"));
					}
				} elseif ($this->session->userdata('role') == "PPKG") {
					if ($id_konten) {
						redirect(site_url('c_seminar/lihat_artikel_seminar/' . $id_konten));
					} else {

						redirect(base_url("index.php/ppkg/c_dashboard_ppkg"));
					}
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					if ($id_konten) {
						redirect(site_url('c_seminar/lihat_artikel_seminar/' . $id_konten));
					} else {


						redirect(base_url("index.php/non_ppkg/c_dashboard_non_ppkg"));
					}
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					redirect(site_url('c_login/login_untuk_melihat_artikel_seminar/' . $id_konten));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_artikel_seminar/' . $id_konten));
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_artikel_seminar/' . $id_konten));
		}
	}

	public function login_untuk_melihat_event_seminar_more()
	{
		$data['title'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('seminar/v_login_untuk_melihat_event_seminar_more');
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_event_seminar_more()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					redirect(base_url("index.php/admin/seminar_admin/c_seminar_admin/daftar_semua_event"));
				} elseif ($this->session->userdata('role') == "PPKG") {
					redirect(base_url("index.php/ppkg/seminar_ppkg/c_seminar_ppkg/daftar_semua_event"));
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					redirect(base_url("index.php/non_ppkg/seminar_non_ppkg/c_seminar_non_ppkg/daftar_semua_event"));
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					// redirect('c_login/login_untuk_melihat_event');
					redirect(site_url('c_login/login_untuk_melihat_event_seminar_more/'));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_event_seminar_more/'));
				// redirect('c_login/login_untuk_melihat_event');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_event_seminar_more/'));
			// redirect('c_login/login_untuk_melihat_event');
		}
	}

	public function login_untuk_melihat_artikel_seminar_more()
	{
		$data['title'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('seminar/v_login_untuk_melihat_artikel_seminar_more');
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_artikel_seminar_more()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					redirect(base_url("index.php/admin/seminar_admin/c_seminar_admin/daftar_semua_artikel"));
				} elseif ($this->session->userdata('role') == "PPKG") {
					redirect(base_url("index.php/ppkg/seminar_ppkg/c_seminar_ppkg/daftar_semua_artikel"));
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					redirect(base_url("index.php/non_ppkg/seminar_non_ppkg/c_seminar_non_ppkg/daftar_semua_artikel"));
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					redirect(site_url('c_login/login_untuk_melihat_artikel_seminar_more/'));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_artikel_seminar_more/'));
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_artikel_seminar_more/'));
		}
	}
	// end - seminar

	//Kerjasama
	public function login_untuk_melihat_event_kerjasama($id_konten)
	{
		$data['title'] = 'Login';
		$datax['event'] = $this->Kerjasama_model->get_event($id_konten);
		$this->load->view('templates/header', $data);
		$this->load->view('kerjasama/v_login_untuk_melihat_event_kerjasama', $datax);
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_event_kerjasama($id_konten)
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					if ($id_konten) {
						redirect(site_url('c_kerjasama/lihat_event_kerjasama/' . $id_konten));
					} else {
						redirect(base_url("index.php/admin/c_dashboard_admin"));
					}
				} elseif ($this->session->userdata('role') == "PPKG") {
					if ($id_konten) {
						redirect(site_url('c_kerjasama/lihat_event_kerjasama/' . $id_konten));
					} else {
						redirect(base_url("index.php/ppkg/c_dashboard_ppkg"));
					}
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					if ($id_konten) {
						redirect(site_url('c_kerjasama/lihat_event_kerjasama/' . $id_konten));
					} else {

						redirect(base_url("index.php/non_ppkg/c_dashboard_non_ppkg"));
					}
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					// redirect('c_login/login_untuk_melihat_event');
					redirect(site_url('c_login/login_untuk_melihat_event_kerjasama/' . $id_konten));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_event_kerjasama/' . $id_konten));
				// redirect('c_login/login_untuk_melihat_event_kerjasama');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_event_kerjasama/' . $id_konten));
			// redirect('c_login/login_untuk_melihat_event');
		}
	}


	public function login_untuk_melihat_artikel_kerjasama($id_konten)
	{
		$data['title'] = 'Login';
		$datax['event'] = $this->Kerjasama_model->get_artikel($id_konten);
		$this->load->view('templates/header', $data);
		$this->load->view('kerjasama/v_login_untuk_melihat_artikel_kerjasama', $datax);
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_artikel_kerjasama($id_konten)
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					if ($id_konten) {
						redirect(site_url('c_kerjasama/lihat_artikel_kerjasama/' . $id_konten));
					} else {
						redirect(base_url("index.php/admin/xxxxxx"));
					}
				} elseif ($this->session->userdata('role') == "PPKG") {
					if ($id_konten) {
						redirect(site_url('c_kerjasama/lihat_artikel_kerjasama/' . $id_konten));
					} else {

						redirect(base_url("index.php/ppkg/c_dashboard_ppkg"));
					}
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					if ($id_konten) {
						redirect(site_url('c_kerjasama/lihat_artikel_kerjasama/' . $id_konten));
					} else {


						redirect(base_url("index.php/non_ppkg/c_dashboard_non_ppkg"));
					}
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					redirect(site_url('c_login/login_untuk_melihat_artikel_kerjasama/' . $id_konten));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_artikel_kerjasama/' . $id_konten));
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_artikel_kerjasama/' . $id_konten));
		}
	}

	public function login_untuk_melihat_event_kerjasama_more()
	{
		$data['title'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('kerjasama/v_login_untuk_melihat_event_kerjasama_more');
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_event_kerjasama_more()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					redirect(base_url("index.php/admin/kerjasama_admin/c_kerjasama_admin/daftar_semua_event"));
				} elseif ($this->session->userdata('role') == "PPKG") {
					redirect(base_url("index.php/ppkg/kerjasama_ppkg/c_kerjasama_ppkg/daftar_semua_event"));
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					redirect(base_url("index.php/non_ppkg/kerjasama_non_ppkg/c_kerjasama_non_ppkg/daftar_semua_event"));
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					// redirect('c_login/login_untuk_melihat_event');
					redirect(site_url('c_login/login_untuk_melihat_event_kerjasama_more/'));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_event_kerjasama_more/'));
				// redirect('c_login/login_untuk_melihat_event');
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_event_kerjasama_more/'));
			// redirect('c_login/login_untuk_melihat_event');
		}
	}

	public function login_untuk_melihat_artikel_kerjasama_more()
	{
		$data['title'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('kerjasama/v_login_untuk_melihat_artikel_kerjasama_more');
		$this->load->view('templates/footer');
	}

	public function proses_untuk_melihat_artikel_kerjasama_more()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = $this->input->post('role');

			if ($this->auth->login_user($username, $password, $role)) {
				if ($this->session->userdata('role') == "Admin") {
					redirect(base_url("index.php/admin/kerjasama_admin/c_kerjasama_admin/daftar_semua_artikel"));
				} elseif ($this->session->userdata('role') == "PPKG") {
					redirect(base_url("index.php/ppkg/kerjasama_ppkg/c_kerjasama_ppkg/daftar_semua_artikel"));
				} elseif ($this->session->userdata('role') == "Non-PPKG") {
					redirect(base_url("index.php/non_ppkg/kerjasama_non_ppkg/c_kerjasama_non_ppkg/daftar_semua_artikel"));
				} else {
					$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
					redirect(site_url('c_login/login_untuk_melihat_artikel_kerjasama_more/'));
				}
			} else {
				$this->session->set_flashdata('error', 'Data yang anda inputkan tidak tepat. Mohon ulangi dengan benar!');
				redirect(site_url('c_login/login_untuk_melihat_artikel_kerjasama_more/'));
			}
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('c_login/login_untuk_melihat_artikel_kerjasama_more/'));
		}
	}
}
