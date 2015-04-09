<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Log_User extends CI_Model
{
  public function login($username, $password)
    {
        $this->db->select('id, username, password')
        ->db->from('users')
        ->db->where('username', $username)
        ->db->where('password', password_hash($password . 'maSuperChaineQuiSertDeSalage',PASSWORD_DEFAULT))
        ->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}
