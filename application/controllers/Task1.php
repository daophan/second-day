<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task1 extends CI_Controller {
	
	public function index()
	{
		// Get email value from post
		$email = $this->input->post('email');

		// Validate email
		if(isset($email))
		{
			$email_valid = preg_match("/^[a-zA-Z0-9!#$%&'*+-\/=?^_`{|}~.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $email);
		}

		$this->load->helper('form');
		$this->load->view('task1');
	}
}