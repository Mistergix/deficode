<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class Basecontroller extends CI_Controller 
{
	public function load_page($page_name, $data)
	{
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view($page_name, $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/end', $data);
	}
}
