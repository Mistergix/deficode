<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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

	private function RedirectIfNotConnected()
	{
		$username = $this->session->userdata('username');
		if(! $this->model->IsAdmin($username))
		{
			redirect(site_url('admin/login'));
		}
	}

	public function dashboard()
	{
		$this->RedirectIfNotConnected();
		$data = array();
        $data['title'] = "Tableau de bord";
        $data['filename'] = 'style';
        $data['desc'] = "Tableau de bord du compte administrateur";

        $this->load->view('header', $data);
        $this->load->view('menu');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('footer');
		$this->load->view('end');
	}

	public function seances()
	{
		$this->RedirectIfNotConnected();
		$this->load->model('Seances_model', 'seances');
		$data = array();
        $data['title'] = "Gestion des séances";
        $data['filename'] = 'style';
		$data['desc'] = "Page de création, édition et suppression des séances";
		$data['seances'] = $this->seances->get_all_seances();

        $this->load->view('header', $data);
        $this->load->view('menu');
        $this->load->view('admin/seances', $data);
        $this->load->view('footer');
		$this->load->view('end');
	}

	public function edit($id)
	{

	}

	public function delete($id)
	{

	}

	public function export($id)
	{
		
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
				redirect(site_url('admin/dashboard'));
			}
			else
			{
				$this->session->set_flashdata("error", "Invalid password");
				redirect(site_url('admin/login'));
			}
		} 
		else 
		{
            $this->login();
        }
	}
}
