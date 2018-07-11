<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{
	public function index()
	{
		$data = array();
		$data['title'] = "Prendre contact";
		$data['filename'] = 'style';
		$data['desc'] = "Formulaire de contact";

		$this->load->view('header', $data);
		$this->load->view('menu');
		$this->load->view('contact');
	}
}
