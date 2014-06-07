<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	private $page_data;

	public function index()
	{
		$this->page_data['current'] = 'home';
		$this->load->library('recaptcha');
		$this->page_data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();
		$this->load->view('header', $this->page_data);
		$this->load->view('home/home', $this->page_data);
		$this->load->view('footer', $this->page_data);
	}
}

?>