<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logger extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'model');
		$this->load->library('form_validation');
	}

    public function index()
    {
		$this->login();
	}

	public function login()
	{
		$data = array();
        $data['title'] = "Se connecter";
        $data['filename'] = 'style';
        $data['desc'] = "Formulaire de connexion au compte administrateur";

        $this->load->view('header', $data);
        $this->load->view('menu');
        $this->load->view('admin/login', $data);
        $this->load->view('footer');
		$this->load->view('end');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}
	
	public function login_validation()
	{
		$this->form_validation->set_rules('mdp','"Mot de passe"','required');

		if ($this->form_validation->run()) 
		{
			$password = $this->input->post('mdp');
			if($this->model->can_login($password))
			{
				$this->session->set_userdata("username", $this->model->GetAdminUsername());
				redirect(site_url('dashboard'));
			}
			else
			{
				$this->session->set_flashdata("error", "Invalid password");
				redirect(site_url('logger/login'));
			}
		} 
		else 
		{
            $this->login();
        }
	}
}
