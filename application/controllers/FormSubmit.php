<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formsubmit extends CI_Controller
{
	public function index()
	{
		$data = array();
		$data['title'] = "Formulaire rempli";
		$data['filename'] = 'style';
		$data['desc'] = "Page de confirmation de demande de contact";

		$this->load->view('header', $data);
		$this->load->view('menu');
		$this->load->view('formsubmit');
		$this->load->view('footer');
		$this->load->view('end');
	}
}
