<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task3 extends CI_Controller {
	
	public function index()
	{
		$paragraph = $this->input->post('paragraph');
		$keyword = $this->input->post('keyword');

		$new_paragraph = str_replace($keyword, "<span class='highlight'>".$keyword."</span>", $paragraph);

		$this->load->helper('form');
		$this->load->view('task3', array('new_paragraph' => $new_paragraph));
	}
}