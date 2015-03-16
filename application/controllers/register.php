<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
        $this->load->view('register_view');
    }

    public function do_register()
    {
        if($this->input->post('register'))//$_POST["register"];
        {
            $this->load->model('reg_user');//loads the user_model.php file in models folder
            if($this->reg_user->add_user())
            {
                redirect('login', 'refresh');
            }
            else
            {
                redirect('register', 'refresh');
            }
        }
    }

}
?>