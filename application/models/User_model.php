<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function get_user_gender_count()
    {
        $query = $this->db->select('*')
            ->from('user')
            ->get();
        return $query->result();
    }

    public function count_rows($table_name)
    {
        return $this->db->count_all($table_name);
    }
    public function count_ppkg_rows()
    {
        $query = $this->db->where('role', 'PPKG') // Ganti 'nama_kolom' dengan nama kolom yang sesuai
            ->from('user')           // Ganti 'nama_tabel' dengan nama tabel yang sesuai
            ->count_all_results();
        return $query;
    }
    public function count_non_ppkg_rows()
    {
        $query = $this->db->where('role', 'Non-PPKG') // Ganti 'nama_kolom' dengan nama kolom yang sesuai
            ->from('user')           // Ganti 'nama_tabel' dengan nama tabel yang sesuai
            ->count_all_results();
        return $query;
    }

    public function count_event_pendidikan_rows($table_name)
    {
        return $this->db->count_all($table_name);
    }

    public function count_artikel_pendidikan_rows($table_name)
    {
        return $this->db->count_all($table_name);
    }

    public function count_event_pengabdian_rows($table_name)
    {
        return $this->db->count_all($table_name);
    }

    public function count_artikel_pengabdian_rows($table_name)
    {
        return $this->db->count_all($table_name);
    }

    public function count_event_penelitian_rows($table_name)
    {
        return $this->db->count_all($table_name);
    }

    public function count_artikel_penelitian_rows($table_name)
    {
        return $this->db->count_all($table_name);
    }

    public function count_event_seminar_rows($table_name)
    {
        return $this->db->count_all($table_name);
    }

    public function count_artikel_seminar_rows($table_name)
    {
        return $this->db->count_all($table_name);
    }

    public function count_event_kerjasama_rows($table_name)
    {
        return $this->db->count_all($table_name);
    }

    public function count_artikel_kerjasama_rows($table_name)
    {
        return $this->db->count_all($table_name);
    }
}
