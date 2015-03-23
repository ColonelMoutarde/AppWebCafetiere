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
}
?>