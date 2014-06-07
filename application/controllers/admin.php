<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Admin extends CI_Controller {

    private $page_data;

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->page_data['current'] = 'home';

        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->page_data['username'] = $session_data['username'];
            $this->load->view('header', $this->page_data);
            $this->load->view('admin/admin', $this->page_data);
            $this->load->view('footer', $this->page_data);
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
        redirect('admin', 'refresh');
    }
}

?>

