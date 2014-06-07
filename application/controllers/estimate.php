<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estimate extends CI_Controller {

	private $page_data;

	public function index()
	{
		$this->page_data['current'] = 'estimate';
		$this->load->library('recaptcha');
		$this->page_data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();
		$this->load->view('header', $this->page_data);
		$this->load->view('estimate/estimate', $this->page_data);
		$this->load->view('footer', $this->page_data);
	}

	public function submit()
	{
		$this->load->model('Estimate_Model');
		$this->load->library('recaptcha');
		$this->page_data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();
		$current = $_POST['current'];
		if($_POST['fname'] !== FALSE && $_POST['lname'] !== FALSE && $_POST['email'] !== FALSE && $_POST['address'] !== FALSE && $_POST['city'] !== FALSE && $_POST['state'] !== FALSE && $_POST['zip'] !== FALSE && $_POST['phone'] !== FALSE && $_POST['description'] !== FALSE)
		{
			$this->recaptcha->recaptcha_check_answer();
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$zip = $_POST['zip'];
			$phone = $_POST['phone'];
			$description = $_POST['description'];
			if($this->recaptcha->getIsValid())
			{
				$est = new Estimate_Model();
				$est->set_firstname($fname);
				$est->set_lastname($lname);
				$est->set_email($email);
				$est->set_address($address);
				$est->set_city($city);
				$est->set_state($state);
				$est->set_zip($zip);
				$est->set_phone($phone);
				$est->set_description($description);
				$est->save();
				$this->session->set_flashdata('success', 'Estimate request successfully submitted.');
				redirect($current, 'refresh');
			}
			else
			{
				$this->session->set_flashdata('error', 'The captcha you entered is not correct.');
				redirect($current, 'refresh');
			}
		}
		else
		{
			redirect('home', 'refresh');
		}
	}
}

?>