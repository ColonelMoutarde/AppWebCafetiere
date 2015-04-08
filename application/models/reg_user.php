<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reg_User extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function add_user()
    {
        $data=array(
            'username'=>$this->input->post('username_r'),
            'firstname'=>$this->input->post('firstname_r'),
            'email'=>$this->input->post('email_r'),
            'password'=>md5($this->input->post('password_r')),
        );
        $this->db->insert('users',$data);
        return true;
    }

    public function update_user($id)
    {
        $data=array(
            'firstname' => $this->input->post('firstname_p'),
            'lastname' => $this->input->post('lastname_p'),
            'password' => md5($this->input->post('password_p')),
            'email' => $this->input->post('email_p'),
            'adress' => $this->input->post('adress_p'),
            'city' => $this->input->post('city_p'),
            'zip' => $this->input->post('zip_p'),
            'country' => $this->input->post('country_p'),

        );
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return true;
    }

    public function get_user($id)
    {
        $query = $this->db->get_where('users', array('id' => $id));
        if($query){
            return ($query->row_array());
        }
        else
            return (null);
    }
}
?>