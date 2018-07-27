<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = array();
		$data['title'] = "Prendre contact";
		$data['filename'] = 'style';
		$data['desc'] = "Formulaire de contact";

		$this->load->view('header', $data);
		$this->load->view('menu');
		$this->load->view('contact');
		$this->load->view('footer');
		$this->load->view('end');
	}

	public function form_validation()
	{
		$this->form_validation->set_rules('name','"Nom"','required');
		$this->form_validation->set_rules('mail','"Mail"','required');
		$this->form_validation->set_rules('message','"Message"','required');

		if ($this->form_validation->run()) 
		{
			$name = $this->input->post('name');
    		$visitor_email = $this->input->post('mail');
    		$message = $this->input->post('message');
    		$headers = "From: $visitor_email";
    		$email_to = 'deficode@parkours.fr';
    		$email_subject = "Nouveau message site";
    		$email_body = "Vous avez reçu un message de $name.\n" . "Le voici :\n $message\n Mail: $visitor_email";
			mail($email_to, $email_subject, $email_body, $headers);
			
			$data = array();
			$data['title'] = "Formulaire rempli avec succès";
			$data['filename'] = 'style';
			$data['desc'] = "Confirmation de message envoyé";

			$this->load->view('header', $data);
			$this->load->view('menu');
			$this->load->view('formsubmit');
			$this->load->view('footer');
			$this->load->view('end');
		} 
		else 
		{
            $this->index();
        }
	}
}
