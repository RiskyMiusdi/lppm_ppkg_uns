<?php
class Pengabdian_model extends CI_Model
{
    private $table_event = "tbl_event_pengabdian";
    private $table_registrasi = "tbl_registrasi_event_pengabdian";
    private $table_artikel = "tbl_artikel_pengabdian";

    /* start event*/
    public function get_all_event()
    {
        $result = $this->db->get($this->table_event)->result();
        return $result;
    }

    public function create_event($data)
    {
        return $this->db->insert($this->table_event, $data);
    }

    public function get_event($id_pengabdian)
    {
        return $this->db->get_where($this->table_event, ['id_pengabdian' => $id_pengabdian])->row();
    }

    public function get_event_aja($id_pengabdian)
    {
        return $this->db->get_where($this->table_event, ['nama_agenda' => $id_pengabdian])->row();
    }

    public function update_event($id_pengabdian, $data)
    {
        $this->db->where('id_pengabdian', $id_pengabdian);
        return $this->db->update($this->table_event, $data);
    }

    public function delete_event($id_pengabdian)
    {
        $this->db->where('id_pengabdian', $id_pengabdian);
        return $this->db->delete($this->table_event);
    }

    public function get_max_id_event()
    {
        return $this->db->get($this->table_event)->row();
    }
    /* finish event*/

    /* start registrasi*/

    public function get_all_registrasi()
    {
        return $this->db->get('tbl_registrasi_event_pengabdian')->result();
    }

    function join2table()
    {
        $this->db->select('*');
        $this->db->from('tbl_registrasi_event_pengabdian');
        $this->db->join('tbl_event_pengabdian', 'tbl_event_pengabdian.id_pengabdian = tbl_registrasi_event_pengabdian.id_pengabdian');
        $query = $this->db->get();
        return $query;
    }
    function ambil_user_sesuai_id($id_registrasi)
    {
        return $this->db->get_where($this->table_registrasi, ["id_pengabdian" => $id_registrasi])->result();
    }

    public function create_registrasi($data)
    {
        return $this->db->insert('tbl_registrasi_event_pengabdian', $data);
    }
    public function get_registrasi($id_registrasi)
    {
        return $this->db->get_where($this->table_registrasi, ["id_registrasi" => $id_registrasi])->row();
    }

    public function update_registrasi($id_pengabdian, $data)
    {
        $this->db->where('id_registrasi', $id_pengabdian);
        return $this->db->update('tbl_registrasi_event_pengabdian', $data);
    }

    public function delete_registrasi($id_registrasi)
    {
        $this->db->where('id_registrasi', $id_registrasi);
        return $this->db->delete('tbl_registrasi_event_pengabdian');
    }
    public function get_column_value($table_name, $column_name, $where_conditions = array())
    {
        $this->db->select($column_name);
        $this->db->from($table_name);

        if (!empty($where_conditions)) {
            $this->db->where($where_conditions);
        }

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->$column_name;
        } else {
            return null;
        }
    }
    /* finish registrasi*/

    /* start artikel*/

    public function get_all_artikel()
    {
        return $this->db->get('tbl_artikel_pengabdian')->result();
    }

    public function create_artikel($data)
    {
        return $this->db->insert('tbl_artikel_pengabdian', $data);
    }
    public function get_artikel($id_registrasi)
    {
        return $this->db->get_where($this->table_artikel, ["id_artikel_pengabdian" => $id_registrasi])->row();
    }

    public function update_artikel($id_pengabdian, $data)
    {
        $this->db->where('id_artikel_pengabdian', $id_pengabdian);
        return $this->db->update('tbl_artikel_pengabdian', $data);
    }

    public function delete_artikel($id_pengabdian)
    {
        $this->db->where('id_artikel_pengabdian', $id_pengabdian);
        return $this->db->delete('tbl_artikel_pengabdian');
    }

    public function get_max_id_artikel()
    {
        return $this->db->get($this->table_artikel)->row();
    }
    /* finish artikel*/
}
