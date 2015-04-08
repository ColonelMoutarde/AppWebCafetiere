<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('reg_user');
    }

    function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['userData'] = $this->reg_user->get_user($session_data['id']);
            $data['title'] = ucfirst($this->uri->uri_string());
            $this->load->view('home_head', $data);
            $this->load->view('home_view', $data);
            $this->load->view('home_foot', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function profile()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['userData'] = $this->reg_user->get_user($session_data['id']);
            $data['title'] = ucfirst('mon compte');
            $this->load->view('home_head', $data);
            $this->load->view('profile_view', $data);
            $this->load->view('home_foot', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function update_profile()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            if($this->input->post('update_p'))//$_POST["register"];
            {
                if($this->reg_user->update_user($session_data['id']))
                {
                    redirect('home/profile', 'refresh');
                }
            }
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function stats()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['userData'] = $this->reg_user->get_user($session_data['id']);
            $data['title'] = ucfirst('statistiques');
            $this->load->view('home_head', $data);
            $this->load->view('stats_view', $data);
            $this->load->view('home_foot', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function users()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['userData'] = $this->reg_user->get_user($session_data['id']);
            $data['title'] = ucfirst('utilisateurs');
            $this->load->view('home_head', $data);
            $this->load->view('users_view', $data);
            $this->load->view('home_foot', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function top()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['userData'] = $this->reg_user->get_user($session_data['id']);
            $data['title'] = ucfirst('top consommateur');
            $this->load->view('home_head', $data);
            $this->load->view('top_view', $data);
            $this->load->view('home_foot', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }

}

?>