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

	public function edit($id=NULL)
	{

	}

	public function delete($id)
	{
		$result = $this->seances->delete($id);
		if($result)
		{
			redirect(site_url('dashboard/seances'));
		}
	}

	public function export($id)
	{
		
	}

	public function add()
	{
		$this->edit();
	}
}
