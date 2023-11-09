<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{
    private $table = "user";

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function save($username, $password, $role, $email, $name, $avatar, $jenis_kelamin, $nia, $no_hp)
    {
        $data = array(
            'username' => $username,
            'role' => $role,
            'email' => $email,
            'password' => $password,
            'name' => $name,
            'no_hp' => $no_hp,
            'jenis_kelamin' => $jenis_kelamin,
            'nia' => $nia,
            'avatar' => $avatar
        );
        $this->db->insert($this->table, $data);
    }





    public function getById($id_user)
    {
        return $this->db->get_where($this->table, ["id_user" => $id_user])->row();
    }


    public function update($data, $id_user)
    {
        $this->db->update($this->table, $data, array('id_user' => $id_user));
    }

    public function delete($id_user)
    {
        $this->db->delete($this->table, array("id_user" => $id_user));
    }

    public function data($number, $offset)
    {
        return $this->db->get($this->table, $number, $offset)->result();
    }

    public function jumlah_data()
    {
        return $this->db->get($this->table)->num_rows();
    }
}
