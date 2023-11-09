<?php
class C_pengabdian_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengabdian_model');
        $this->load->model('m_data');
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

    public function daftar_semua_event()
    {
        $data1['title'] = "Admin - Daftar Event pengabdian";
        $data['pengabdian'] = $this->Pengabdian_model->get_all_event();
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['join'] = $this->Pengabdian_model->join2table()->result();

        // print_r($data);
        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/pengabdian_admin/pengabdian_admin', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function create_event()
    {
        $data1['title'] = "Admin - Tambah Event";
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/pengabdian_admin/create_pengabdian');
        $this->load->view('admin/_partials/footer');
    }


    public function store_event()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['max_width'] = 3048;
        $config['max_height'] = 3000;
        $config['encrypt_name'] = false;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('avatar')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/pengabdian_admin/edit_pengabdian_admin', $error);
        } else {
            $avatar = $this->upload->data('file_name');

            $data = array(
                'nama_agenda' => $this->input->post('nama_agenda'),
                'tanggal_pelaksanaan' => $this->input->post('tanggal_pelaksanaan'),
                'peserta' => $this->input->post('peserta'),
                'kuota' => $this->input->post('kuota'),
                'tempat' => $this->input->post('tempat'),
                'batas_waktu_pendaftaran' => $this->input->post('batas_waktu_pendaftaran'),
                'avatar' => $avatar,
                'id_peserta'         => $this->input->post('id_peserta'),
                'deskripsi_agenda' =>  nl2br($this->input->post('deskripsi_agenda'))

            );

            $this->Pengabdian_model->create_event($data);

            redirect('admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_event');
        }
    }

    public function edit_event($id_pengabdian)
    {
        $data1['title'] = "Admin - Edit Event";
        $data['pengabdian'] = $this->Pengabdian_model->get_event($id_pengabdian);
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // print_r($data);
        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/pengabdian_admin/edit_event_pengabdian_admin', $data);
        $this->load->view('admin/_partials/footer');
    }


    public function update_event($id_pengabdian)
    {
        $data = array(
            'nama_agenda' => $this->input->post('nama_agenda'),
            'tanggal_pelaksanaan' => $this->input->post('tanggal_pelaksanaan'),
            'peserta' => $this->input->post('peserta'),
            'kuota' => $this->input->post('kuota'),
            'tempat' => $this->input->post('tempat'),
            'batas_waktu_pendaftaran' => $this->input->post('batas_waktu_pendaftaran'),
            'deskripsi_agenda' =>  nl2br($this->input->post('deskripsi_agenda'))

        );

        // Cek apakah ada gambar yang diunggah
        if (!empty($_FILES['avatar']['name'])) {
            // Konfigurasi upload gambar
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 5000;
            $config['max_width'] = 3048;
            $config['max_height'] = 3000;
            $config['encrypt_name'] = false;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('avatar')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('wjwkwk');
            }

            $uploaded_data = $this->upload->data();
            $avatar = $uploaded_data['file_name'];

            $data['avatar'] = $avatar;
        }

        $this->Pengabdian_model->update_event($id_pengabdian, $data);

        redirect('admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_event');
        // redirect('x');
    }

    public function delete_event($id_pengabdian)
    {
        $this->Pengabdian_model->delete_event($id_pengabdian);
        redirect('admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_event');
    }

    public function create_peserta($id_pengabdian)
    {
        $data1['title'] = "Pendaftaran Event pengabdian";
        $data['event'] = $this->Pengabdian_model->get_event($id_pengabdian);
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['join'] = $this->Pengabdian_model->join2table()->result();
        $data['user2'] = $this->m_data->getAll();
        // print_r($datax);
        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/pengabdian_admin/create_peserta_event_pengabdian', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function store_peserta($id_pengabdian)
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['max_width'] = 3048;
        $config['max_height'] = 3000;
        $config['encrypt_name'] = false;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('avatar')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('halaman_error', $error);
        } else {
            $avatar = $this->upload->data('file_name');

            $data = array(

                'avatar'                => $avatar,
                'nama_lengkap'          => $this->input->post('nama_lengkap'),
                'status_anggota'        => $this->input->post('status_anggota'),
                'no_hp'                 => $this->input->post('no_hp'),
                'email'                 => $this->input->post('email'),
                'nama_agenda'           => $this->input->post('nama_agenda'),
                'id_pengabdian'         => $this->input->post('id_pengabdian'),
                'id_peserta'         => $this->input->post('id_peserta'),
                'tanggal_registrasi'    => $this->input->post('tanggal_registrasi')

            );

            $this->Pengabdian_model->create_registrasi($data);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect(site_url('admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_peserta/' . $id_pengabdian));
        }
    }

    public function daftar_semua_peserta($id_pengabdian)
    {
        $data1['title']      = "Daftar Peserta";
        $data['peserta']     = $this->Pengabdian_model->ambil_user_sesuai_id($id_pengabdian);
        $data['join'] = $this->Pengabdian_model->join2table()->result();
        $data['event'] = $this->Pengabdian_model->get_event($id_pengabdian);
        // $data['event'] = $this->Pendidikan_model->get_event($id_pendidikan);

        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // print_r($datax);
        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/pengabdian_admin/data_peserta_event_pengabdian', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function edit_peserta($id_registrasi)
    {
        $data1['user']      = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data1['title']     = "Edit Data Peserta";
        $data['pengabdian'] = $this->Pengabdian_model->get_registrasi($id_registrasi);
        //print_r($datax);
        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/pengabdian_admin/edit_data_peserta_event_pengabdian', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function update_peserta($id_pengabdian)
    {
        $data = array(

            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'status_anggota' => $this->input->post('status_anggota'),
            'nama_agenda' => $this->input->post('nama_agenda'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email')

        );

        // Cek apakah ada gambar yang diunggah
        if (!empty($_FILES['avatar']['name'])) {
            // Konfigurasi upload gambar
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 5000;
            $config['max_width'] = 3048;
            $config['max_height'] = 3000;
            $config['encrypt_name'] = false;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('avatar')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('halaman_eror');
            }

            $uploaded_data = $this->upload->data();
            $avatar = $uploaded_data['file_name'];
            $data['avatar'] = $avatar;
        }

        $this->Pengabdian_model->update_registrasi($id_pengabdian, $data);

        redirect(site_url('admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_peserta/' . $this->input->post('id_pengabdian')));
    }

    public function delete_peserta($id_registrasi)
    {
        $data['x'] =  $this->Pengabdian_model->get_registrasi($id_registrasi);
        $this->Pengabdian_model->delete_registrasi($id_registrasi);
        redirect(site_url('admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_peserta/' . $data['x']->id_pengabdian));
    }


    public function daftar_semua_artikel()
    {
        $data['title'] = "Admin - Daftar Semua Artikel";
        $data1['artikel'] = $this->Pengabdian_model->get_all_artikel();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/_partials/header', $data);
        $this->load->view('admin/pengabdian_admin/artikel_admin', $data1);
        $this->load->view('admin/_partials/footer');
    }

    public function create_artikel()
    {
        $data1['title'] = "Admin - Tambah Artikel";
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['penulis'] = $this->m_data->getAll();
        // print_r($data);
        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/pengabdian_admin/create_artikel_pengabdian_admin', $data);
        $this->load->view('admin/_partials/footer');
    }


    public function store_artikel()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 5000;
        $config['max_width'] = 3048;
        $config['max_height'] = 3000;
        // $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        // Menyiapkan data artikel
        $data = array(
            'judul_artikel' => $this->input->post('judul_artikel'),
            'tanggal_publikasi' => $this->input->post('tanggal_publikasi'),
            'paragraf1' =>  nl2br($this->input->post('paragraf1')),
            'status' => $this->input->post('status'),
            'id_penulis' => $this->input->post('id_penulis'),
            'penulis' => $this->input->post('penulis')
        );

        // Mengunggah gambar avatar
        if (!empty($_FILES['avatar']['name'])) {
            if ($this->upload->do_upload('avatar')) {
                $uploadData = $this->upload->data();
                $data['avatar'] = $uploadData['file_name'];
            }
        }

        // Mengunggah gambar paragraf 1, 2, dan 3
        for ($i = 1; $i <= 3; $i++) {
            $kolom_gambar = 'gambar_paragraf' . $i;
            if (!empty($_FILES[$kolom_gambar]['name'])) {
                if ($this->upload->do_upload($kolom_gambar)) {
                    $uploadData = $this->upload->data();
                    $data[$kolom_gambar] = $uploadData['file_name'];
                }
            }
        }

        // Menyimpan data artikel ke dalam tabel
        $this->Pengabdian_model->create_artikel($data);

        redirect('admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_artikel');
    }

    public function edit_artikel($id_pengabdian)
    {
        $data1['title'] = "Admin - Edit Artikel";
        $data['pengabdian'] = $this->Pengabdian_model->get_artikel($id_pengabdian);
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // print_r($data);
        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/pengabdian_admin/edit_artikel_pengabdian_admin', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function update_artikel($id_pengabdian)
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 5000;
        $config['max_width'] = 3048;
        $config['max_height'] = 3000;
        // $config['encrypt_name'] = true;
        $this->load->library('upload', $config);

        // Menyiapkan data artikel
        $data = array(
            'judul_artikel' => $this->input->post('judul_artikel'),
            'tanggal_publikasi' => $this->input->post('tanggal_publikasi'),
            'paragraf1' =>  nl2br($this->input->post('paragraf1')),
            'status' => $this->input->post('status'),
            'penulis' => $this->input->post('penulis')
        );

        // Mengunggah gambar avatar
        if (!empty($_FILES['avatar']['name'])) {
            if ($this->upload->do_upload('avatar')) {
                $uploadData = $this->upload->data();
                $data['avatar'] = $uploadData['file_name'];
            }
        }

        // Mengunggah gambar paragraf 1, 2, dan 3
        for ($i = 1; $i <= 3; $i++) {
            $kolom_gambar = 'gambar_paragraf' . $i;
            if (!empty($_FILES[$kolom_gambar]['name'])) {
                if ($this->upload->do_upload($kolom_gambar)) {
                    $uploadData = $this->upload->data();
                    $data[$kolom_gambar] = $uploadData['file_name'];
                }
            }
        }

        // Menyimpan data artikel ke dalam tabel
        $this->Pengabdian_model->update_artikel($id_pengabdian, $data);

        redirect('admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_artikel');
    }

    public function delete_artikel($id_pengabdian)
    {
        $this->Pengabdian_model->delete_artikel($id_pengabdian);
        redirect('admin/pengabdian_admin/c_pengabdian_admin/daftar_semua_artikel');
    }
}
