<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task2 extends CI_Controller {
	
	public function index()
	{
		// Get filename value from post value
		$filename = $this->input->post('filename');
		$ext = null;
		$message = '';

		$extension_map = array(
				'archive' => array('RAR', 'ZIP', '7Z', 'GZ'),
				'image' => array('JPEG', 'JPG', 'PNG'),
				'text' => array('TXT', 'INI', 'CFG', 'DATA')
			);
		
		if(isset($filename))
		{
			$temp_array = explode('.', $filename);
			if (sizeof($temp_array) > 1) {
				// Get extension value
				$ext = strtoupper(end($temp_array));

				// Check extension type
				switch (true) {
					case in_array($ext, $extension_map['archive']):
						$message = 'This is archive file.';
						break;

					case in_array($ext, $extension_map['image']):
						$message = 'This is image file.';
						break;

					case in_array($ext, $extension_map['text']):
						$message = 'This is text file.';
						break;
					default:
						$message = 'Unknown file type.';
						break;
				}
			}
			else $message = 'No extension.';
		}

		$this->load->helper('form');
		$this->load->view('task2', array('filename' => $filename, 'message' => $message));
	}
}
