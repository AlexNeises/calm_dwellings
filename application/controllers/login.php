<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	private $page_data;

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->page_data['current'] = 'home';
		$this->load->helper(array('form'));
		$this->load->view('header', $this->page_data);
		$this->load->view('login_view', $this->page_data);
		$this->load->view('footer', $this->page_data);
	}
}

?>