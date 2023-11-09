<?php
class Pendidikan_model extends CI_Model
{
    private $table_event = "tbl_event_pendidikan";
    private $table_registrasi = "tbl_registrasi_event_pendidikan";
    private $table_artikel = "tbl_artikel_pendidikan";

    /* mulai event*/
    public function get_all_event()
    {
        $result = $this->db->get($this->table_event)->result();
        return $result;
    }

    public function create_event($data)
    {
        return $this->db->insert($this->table_event, $data);
    }

    public function get_event($id_pendidikan)
    {
        return $this->db->get_where($this->table_event, ['id_pendidikan' => $id_pendidikan])->row();
    }

    public function get_event_aja($id_pendidikan)
    {
        return $this->db->get_where($this->table_event, ['nama_agenda' => $id_pendidikan])->row();
    }

    public function update_event($id_pendidikan, $data)
    {
        $this->db->where('id_pendidikan', $id_pendidikan);
        return $this->db->update($this->table_event, $data);
    }

    public function delete_event($id_pendidikan)
    {
        $this->db->where('id_pendidikan', $id_pendidikan);
        return $this->db->delete($this->table_event);
    }

    public function get_max_id_event()
    {
        return $this->db->get($this->table_event)->row();
    }

    /*event berakhir */

    /*event registrasi mulai */

    public function get_all_registrasi()
    {
        return $this->db->get('tbl_registrasi_event_pendidikan')->result();
    }

    function join2table()
    {
        $this->db->select('*');
        $this->db->from('tbl_registrasi_event_pendidikan');
        $this->db->join('tbl_event_pendidikan', 'tbl_event_pendidikan.id_pendidikan = tbl_registrasi_event_pendidikan.id_pendidikan');
        $query = $this->db->get();
        return $query;
    }
    function ambil_user_sesuai_id($id_registrasi)
    {
        return $this->db->get_where($this->table_registrasi, ["id_pendidikan" => $id_registrasi])->result();
    }

    public function create_registrasi($data)
    {
        return $this->db->insert('tbl_registrasi_event_pendidikan', $data);
    }
    public function get_registrasi($id_registrasi)
    {
        return $this->db->get_where($this->table_registrasi, ["id_registrasi" => $id_registrasi])->row();
    }
    public function update_registrasi($id_pendidikan, $data)
    {
        $this->db->where('id_registrasi', $id_pendidikan);
        return $this->db->update('tbl_registrasi_event_pendidikan', $data);
    }

    public function delete_registrasi($id_registrasi)
    {
        $this->db->where('id_registrasi', $id_registrasi);
        return $this->db->delete('tbl_registrasi_event_pendidikan');
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
    /* event registrasi berakhir*/

    /* event artikel mulai*/
    public function get_all_artikel()
    {
        return $this->db->get('tbl_artikel_pendidikan')->result();
    }

    public function create_artikel($data)
    {
        return $this->db->insert('tbl_artikel_pendidikan', $data);
    }
    public function get_artikel($id_registrasi)
    {
        return $this->db->get_where($this->table_artikel, ["id_artikel_pendidikan" => $id_registrasi])->row();
    }

    public function update_artikel($id_pendidikan, $data)
    {
        $this->db->where('id_artikel_pendidikan', $id_pendidikan);
        return $this->db->update('tbl_artikel_pendidikan', $data);
    }

    public function delete_artikel($id_pendidikan)
    {
        $this->db->where('id_artikel_pendidikan', $id_pendidikan);
        return $this->db->delete('tbl_artikel_pendidikan');
    }

    public function get_max_id_artikel()
    {
        return $this->db->get($this->table_artikel)->row();
    }
}
