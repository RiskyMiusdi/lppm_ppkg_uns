<?php
class C_seminar_non_ppkg extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Seminar_model');
        // $this->load->model('Seminar_model');
        // Cek apakah pengguna sudah login
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('error', 'Maaf, anda belum login. Mohon login dahulu');
            redirect('c_login'); // Redirect ke halaman login jika belum login
        }

        // Cek apakah pengguna memiliki role sebagai non_ppkg
        $user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if (!$user || $user['role'] !== 'Non-PPKG') {
            $this->session->set_flashdata('error', 'Maaf, anda tidak bisa mengakses halaman non_ppkg. Silahkan login dengan benar.');
            redirect('c_login'); // Redirect ke halaman login jika bukan non_ppkg
        }
    }

    public function daftar_semua_event()
    {
        $data1['title'] = "non_ppkg - Daftar Event seminar";
        $data['seminar'] = $this->Seminar_model->get_all_event();
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['join'] = $this->Seminar_model->join2table()->result();

        // print_r($data);
        $this->load->view('non_ppkg/_partials/header', $data1);
        $this->load->view('non_ppkg/seminar_non_ppkg/seminar_non_ppkg', $data);
        $this->load->view('non_ppkg/_partials/footer');
    }

    public function create_event()
    {
        $data1['title'] = "non_ppkg - Tambah Event";
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('non_ppkg/_partials/header', $data1);
        $this->load->view('non_ppkg/seminar_non_ppkg/create_seminar');
        $this->load->view('non_ppkg/_partials/footer');
    }

    public function edit_event($id_seminar)
    {
        $data1['title'] = "non_ppkg - Edit Event";
        $data['seminar'] = $this->Seminar_model->get_event($id_seminar);
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // print_r($data);
        $this->load->view('non_ppkg/_partials/header', $data1);
        $this->load->view('non_ppkg/seminar_non_ppkg/edit_event_seminar_non_ppkg', $data);
        $this->load->view('non_ppkg/_partials/footer');
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
            $this->load->view('non_ppkg/seminar_non_ppkg/edit_seminar_non_ppkg', $error);
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
                'deskripsi_agenda' =>  nl2br($this->input->post('deskripsi_agenda'))

            );

            $this->Seminar_model->create_event($data);

            redirect('non_ppkg/seminar_non_ppkg/c_seminar_non_ppkg/daftar_semua_event');
        }
    }


    public function update_event($id_seminar)
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

        $this->Seminar_model->update_event($id_seminar, $data);

        redirect('non_ppkg/seminar_non_ppkg/c_seminar_non_ppkg/daftar_semua_event');
        // redirect('x');
    }

    public function delete_event($id_seminar)
    {
        $this->Seminar_model->delete_event($id_seminar);
        redirect('non_ppkg/seminar_non_ppkg/c_seminar_non_ppkg/daftar_semua_event');
    }

    public function create_peserta($id_seminar)
    {
        $data1['title'] = "Pendaftaran Event seminar";
        $data['event'] = $this->Seminar_model->get_event($id_seminar);
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['join'] = $this->Seminar_model->join2table()->result();
        // print_r($datax);
        $this->load->view('non_ppkg/_partials/header', $data1);
        $this->load->view('non_ppkg/seminar_non_ppkg/create_peserta_event_seminar', $data);
        $this->load->view('non_ppkg/_partials/footer');
    }

    public function store_peserta()
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
                'id_seminar'         => $this->input->post('id_seminar'),
                'id_peserta'         => $this->input->post('id_peserta'),
                'tanggal_registrasi'    => $this->input->post('tanggal_registrasi')

            );

            $this->Seminar_model->create_registrasi($data);
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran Berhasil');
            redirect(site_url('non_ppkg/seminar_non_ppkg/c_seminar_non_ppkg/daftar_semua_event/'));
        }
    }



    public function daftar_semua_peserta($id_seminar)
    {
        $data1['title']      = "Daftar Peserta";
        $data['peserta']     = $this->Seminar_model->ambil_user_sesuai_id($id_seminar);
        $data['join'] = $this->Seminar_model->join2table()->result();
        $data['event'] = $this->Seminar_model->get_event($id_seminar);
        // $data['event']        = $this->Seminar_model->get_registrasi($id_seminar);
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // print_r($datax);
        $this->load->view('non_ppkg/_partials/header', $data1);
        $this->load->view('non_ppkg/seminar_non_ppkg/data_peserta_event_seminar', $data);
        $this->load->view('non_ppkg/_partials/footer');
    }

    public function edit_peserta($id_registrasi)
    {
        $data1['user']      = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data1['title']     = "Edit Data Peserta";
        $data['seminar'] = $this->Seminar_model->get_registrasi($id_registrasi);
        //print_r($datax);
        $this->load->view('non_ppkg/_partials/header', $data1);
        $this->load->view('non_ppkg/seminar_non_ppkg/edit_data_peserta_event_seminar', $data);
        $this->load->view('non_ppkg/_partials/footer');
    }

    public function update_peserta($id_seminar)
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

        $this->Seminar_model->update_registrasi($id_seminar, $data);

        redirect(site_url('non_ppkg/seminar_non_ppkg/c_seminar_non_ppkg/daftar_semua_peserta/' . $this->input->post('id_seminar')));
    }

    public function delete_peserta($id_registrasi)
    {
        $data['x'] =  $this->Seminar_model->get_registrasi($id_registrasi);
        $this->Seminar_model->delete_registrasi($id_registrasi);
        redirect(site_url('non_ppkg/seminar_non_ppkg/c_seminar_non_ppkg/daftar_semua_peserta/' . $data['x']->id_seminar));
    }




    public function daftar_semua_artikel()
    {
        $data['title'] = "non_ppkg - Daftar Semua Artikel";
        $data1['artikel'] = $this->Seminar_model->get_all_artikel();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('non_ppkg/_partials/header', $data);
        $this->load->view('non_ppkg/seminar_non_ppkg/artikel_non_ppkg', $data1);
        $this->load->view('non_ppkg/_partials/footer');
    }


    public function create_artikel()
    {
        $data1['title'] = "non_ppkg - Tambah Artikel";
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['penulis'] = $this->m_data->getAll();
        // print_r($data);
        $this->load->view('non_ppkg/_partials/header', $data1);
        $this->load->view('non_ppkg/seminar_non_ppkg/create_artikel_seminar_non_ppkg', $data);
        $this->load->view('non_ppkg/_partials/footer');
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
        $this->Seminar_model->create_artikel($data);

        redirect('non_ppkg/seminar_non_ppkg/c_seminar_non_ppkg/daftar_semua_artikel');
    }



    public function edit_artikel($id_seminar)
    {
        $data['title'] = "non_ppkg - Edit Artikel";
        $data['seminar'] = $this->Seminar_model->get_artikel($id_seminar);
        $data1['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // print_r($data);
        $this->load->view('non_ppkg/_partials/header', $data1);
        $this->load->view('non_ppkg/seminar_non_ppkg/edit_artikel_seminar_non_ppkg', $data);
        $this->load->view('non_ppkg/_partials/footer');
    }



    public function update_artikel($id_seminar)
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
        $this->Seminar_model->update_artikel($id_seminar, $data);

        redirect('non_ppkg/seminar_non_ppkg/c_seminar_non_ppkg/daftar_semua_artikel');
    }

    public function delete_artikel($id_seminar)
    {
        $this->Seminar_model->delete_artikel($id_seminar);
        redirect('non_ppkg/seminar_non_ppkg/c_seminar_non_ppkg/daftar_semua_artikel');
    }
}
