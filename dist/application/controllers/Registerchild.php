<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("Basecontroller.php");

class Registerchild extends Basecontroller 
{
	public function index()
	{
		$this->load->helper(array('form'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('parent_fn', 'Votre prénom', 'required|trim');
        $this->form_validation->set_rules('parent_ln', 'Votre nom', 'required|trim');
        $this->form_validation->set_rules('parent_email', 'Votre email', 'required|trim|valid_email');
		$this->form_validation->set_rules('parent_phone', 'Votre numéro de téléphone portable', 'required|trim|regex_match[/^0[1-9](?:\d{2}){4}$/]');
		$this->form_validation->set_rules('child_fn', 'Prénom de votre enfant', 'required|trim');
		$this->form_validation->set_rules('child_ln', 'Nom de votre enfant', 'required|trim');
		$this->form_validation->set_rules('child_level', 'Classe de votre enfant', 'required|trim');


		if ($this->form_validation->run() == FALSE)
		{
			$this->load_page("forms/register_child/form", ["title" => "Inscrire mon enfant", "styles" => ["main", "form"], "scripts" => ["main", "validate"]]);
		}
		else
		{
			$this->load_page("forms/register_child/success", ["title" => "Mon enfant est inscrit", "styles" => ["main"], "scripts" => ["main"]]);
		}
	}
}
