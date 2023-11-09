<?php
class Auth extends CI_Model
{


    function register($username, $password, $role, $email, $name, $avatar)
    {
        $data_user = array(
            'username' => $username,
            'role' => $role,
            'email' => $email,
            'password' => $password,
            'avatar' => $avatar,
            'name' => $name

        );
        $this->db->insert('user', $data_user);
    }

    function login_user($username, $password, $role)
    {
        $query = $this->db->get_where('user', array('username' => $username, 'role' => $role));




        if ($query->num_rows() > 0) {
            $data_user = $query->row_array();  //$data_user->password
            if ($password == $data_user['password']) {
                $data = [
                    'username' => $data_user['username'],
                    'role' => $data_user['role'],


                ];

                $this->session->set_userdata($data);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}
