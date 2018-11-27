<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'model');
		$this->RedirectIfNotConnected();
		$this->load->library('form_validation');
		$this->load->model('Seances_model', 'seances');
	}

	private function RedirectIfNotConnected()
	{
		$username = $this->session->userdata('username');
		if(! $this->model->IsAdmin($username))
		{
			redirect(site_url('logger/login'));
		}
	}

    public function index()
    {
		$this->dashboard();
	}

	public function dashboard()
	{
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

	public function delete($id)
	{
		$result = $this->seances->delete($id);
		if($result)
		{
			redirect(site_url('dashboard/seances'));
		}
	}

	public function add_page()
	{
		$data = array();
        $data['title'] = "Création d'une séance";
        $data['filename'] = 'style';
		$data['desc'] = "Page de création de séances";

        $this->load->view('header', $data);
        $this->load->view('menu');
        $this->load->view('admin/edit', $data);
        $this->load->view('footer');
		$this->load->view('end');
	}

	public function edit_page($id)
	{
		$seance = $this->seances->get_seance_data($id);
		if(! isset($seance))
		{
			show_404();
		}

		$title = $seance->title;
		$data = array();
		$data["seance"] = $seance;
		$data['title'] = "Edition : $title";
		$data['filename'] = 'style';
		$data['desc'] = "Page d'édition d'une séance";

		$this->load->view('header', $data);
		$this->load->view('menu');
		$this->load->view('admin/edit', $data);
		$this->load->view('footer');
		$this->load->view('end');
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('title','"Titre"','required');
		$this->form_validation->set_rules('description','"Description"','required');
		$this->form_validation->set_rules('content','"Contenu"','required');
		$this->form_validation->set_rules('priority','"Priorité"','required');

		if ($this->form_validation->run()) 
		{
			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$content = $this->input->post('content');
			$priority = $this->input->post('priority');

			$this->seances->edit_seance($id, $title, $description, $content, $priority);
			redirect(site_url('dashboard/seances'));
		} 
		else 
		{
            $this->edit_page($id);
        }
	}

	public function add()
	{
		$this->form_validation->set_rules('title','"Titre"','required');
		$this->form_validation->set_rules('description','"Description"','required');
		$this->form_validation->set_rules('content','"Contenu"','required');
		$this->form_validation->set_rules('priority','"Priorité"','required');

		if ($this->form_validation->run()) 
		{
			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$content = $this->input->post('content');
			$priority = $this->input->post('priority');

			$this->seances->add_seance($title, $description, $content, $priority);
			redirect(site_url('dashboard/seances'));
		} 
		else 
		{
            $this->add_page();
        }
	}
}
