<?php
class C_penelitian_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penelitian_model');
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
        $data1['title'] = "Admin - Daftar Event penelitian";
        $data['penelitian'] = $this->Penelitian_model->get_all_event();
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['join'] = $this->Penelitian_model->join2table()->result();

        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/penelitian_admin/penelitian_admin', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function create_event()
    {
        $data1['title'] = "Admin - Tambah Event";
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/penelitian_admin/create_penelitian');
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
            $this->load->view('admin/penelitian_admin/edit_penelitian_admin', $error);
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

            $this->Penelitian_model->create_event($data);

            redirect('admin/penelitian_admin/c_penelitian_admin/daftar_semua_event');
        }
    }
    public function edit_event($id_penelitian)
    {
        $data1['title'] = "Admin - Edit Event";
        $data['penelitian'] = $this->Penelitian_model->get_event($id_penelitian);
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // print_r($data);
        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/penelitian_admin/edit_event_penelitian_admin', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function update_event($id_penelitian)
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

        $this->Penelitian_model->update_event($id_penelitian, $data);

        redirect('admin/penelitian_admin/c_penelitian_admin/daftar_semua_event');
    }

    public function delete_event($id_penelitian)
    {
        $this->Penelitian_model->delete_event($id_penelitian);
        redirect('admin/penelitian_admin/c_penelitian_admin/daftar_semua_event');
    }

    public function create_peserta($id_penelitian)
    {
        $data1['title'] = "Pendaftaran Event penelitian";
        $data['event'] = $this->Penelitian_model->get_event($id_penelitian);
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['join'] = $this->Penelitian_model->join2table()->result();
        $data['user2'] = $this->m_data->getAll();
        // print_r($datax);
        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/penelitian_admin/create_peserta_event_penelitian', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function store_peserta($id_penelitian)
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
                'id_penelitian'         => $this->input->post('id_penelitian'),
                'id_peserta'         => $this->input->post('id_peserta'),
                'tanggal_registrasi'    => $this->input->post('tanggal_registrasi')

            );

            $this->Penelitian_model->create_registrasi($data);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect(site_url('admin/penelitian_admin/c_penelitian_admin/daftar_semua_peserta/' . $id_penelitian));
        }
    }

    public function daftar_semua_peserta($id_penelitian)
    {
        $data1['title']      = "Daftar Peserta";
        $data['peserta']     = $this->Penelitian_model->ambil_user_sesuai_id($id_penelitian);
        $data['join'] = $this->Penelitian_model->join2table()->result();
        $data['event'] = $this->Penelitian_model->get_event($id_penelitian);

        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/penelitian_admin/data_peserta_event_penelitian', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function edit_peserta($id_registrasi)
    {
        $data1['user']      = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data1['title']     = "Edit Data Peserta";
        $data['penelitian'] = $this->Penelitian_model->get_registrasi($id_registrasi);

        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/penelitian_admin/edit_data_peserta_event_penelitian', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function update_peserta($id_penelitian)
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

        $this->Penelitian_model->update_registrasi($id_penelitian, $data);

        redirect(site_url('admin/penelitian_admin/c_penelitian_admin/daftar_semua_peserta/' . $this->input->post('id_penelitian')));
    }

    public function delete_peserta($id_registrasi)
    {
        $data['x'] =  $this->Penelitian_model->get_registrasi($id_registrasi);
        $this->Penelitian_model->delete_registrasi($id_registrasi);
        redirect(site_url('admin/penelitian_admin/c_penelitian_admin/daftar_semua_peserta/' . $data['x']->id_penelitian));
    }

    public function daftar_semua_artikel()
    {
        $data['title'] = "Admin - Daftar Semua Artikel";
        $data1['artikel'] = $this->Penelitian_model->get_all_artikel();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/_partials/header', $data);
        $this->load->view('admin/penelitian_admin/artikel_admin', $data1);
        $this->load->view('admin/_partials/footer');
    }


    public function create_artikel()
    {
        $data1['title'] = "Admin - Tambah Artikel";
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['penulis'] = $this->m_data->getAll();
        // print_r($data);
        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/penelitian_admin/create_artikel_penelitian_admin', $data);
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
        $this->Penelitian_model->create_artikel($data);

        redirect('admin/penelitian_admin/c_penelitian_admin/daftar_semua_artikel');
    }



    public function edit_artikel($id_penelitian)
    {
        $data1['title'] = "Admin - Edit Artikel";
        $data['penelitian'] = $this->Penelitian_model->get_artikel($id_penelitian);
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // print_r($data);
        $this->load->view('admin/_partials/header', $data1);
        $this->load->view('admin/penelitian_admin/edit_artikel_penelitian_admin', $data);
        $this->load->view('admin/_partials/footer');
    }



    public function update_artikel($id_penelitian)
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
        $this->Penelitian_model->update_artikel($id_penelitian, $data);

        redirect('admin/penelitian_admin/c_penelitian_admin/daftar_semua_artikel');
    }

    public function delete_artikel($id_penelitian)
    {
        $this->Penelitian_model->delete_artikel($id_penelitian);
        redirect('admin/penelitian_admin/c_penelitian_admin/daftar_semua_artikel');
    }
}
