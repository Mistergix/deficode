<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data = array();
		$data['title'] = "L'informatique avec Parkours";
		$data['filename'] = 'style';
		$data['desc'] = "Accueil du site déficode, explications du projet et de Python";

		$this->load->view('header', $data);
		$this->load->view('menu');
		$this->load->view('home');
	}
}
