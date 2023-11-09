<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_data");
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
        $data['title'] = 'Admin - Member';
        $data1['user'] = $this->M_data->getAll();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/_partials/header', $data);
        $this->load->view('admin/admin_member', $data1);
        $this->load->view('admin/_partials/footer');
    }

    public function create()
    {
        $data['title'] = 'Admin - Tambah Member';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/_partials/header', $data);
        $this->load->view('admin/create_member.php');
        $this->load->view('admin/_partials/footer');
    }
    public function save()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;
        $config['max_width']            = 3048;
        $config['max_height']           = 3000;
        $config['encrypt_name']         = FALSE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('avatar')) {
            $error = array('error' => $this->upload->display_errors());
            redirect('admin/c_member/create', $error);
        } else {
            $avatar = $this->upload->data("file_name");
            $this->form_validation->set_rules('name', 'Nama Lengkap', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('role', 'Role', 'required');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[1]|max_length[255]|is_unique[user.username]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[1]|max_length[255]|is_unique[user.email]|valid_email');
            $this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required|is_unique[user.no_hp]');
            $this->form_validation->set_rules('nia', 'Nomor Induk Anggota', 'required|is_unique[user.nia]');
            if ($this->form_validation->run() == true) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $role = $this->input->post('role');
                $email = $this->input->post('email');
                $name = $this->input->post('name');
                $nia = $this->input->post('nia');
                $no_hp = $this->input->post('no_hp');
                $jenis_kelamin = $this->input->post('jenis_kelamin');
                $this->M_data->save($username, $password, $role, $email, $name, $avatar, $jenis_kelamin, $nia, $no_hp);
                redirect('admin/c_member');
            } else {
                $this->session->set_flashdata('error', validation_errors());
                redirect('admin/c_member/create');
            }
        }
    }



    public function edit_member($id_user)
    {
        $data['title'] = 'Admin - Edit Member';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data1['user'] = $this->M_data->getById($id_user);
        $this->load->view('admin/_partials/header', $data);
        $this->load->view('admin/edit_member', $data1);
        $this->load->view('admin/_partials/footer');
    }
    public function update($id_user)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(site_url('admin/c_member/edit_member/' . $id_user));
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $role = $this->input->post('role');
            $no_hp = $this->input->post('no_hp');
            $nia = $this->input->post('nia');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
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
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'uploads' . $old_image);
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
            redirect('admin/c_member');
        }
    }

    public function delete($id_user)
    {
        $this->M_data->delete($id_user);
        redirect('admin/c_member');
    }
}
