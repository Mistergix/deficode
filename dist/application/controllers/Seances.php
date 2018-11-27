<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seances extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Seances_model', 'seances');
	}

	public function index()
	{
		$data = array();
		$data['title'] = "Les séances";
		$data['filename'] = 'style';
		$data['desc'] = "Liste des séances de Python";

		$data['seances'] = $this->seances->get_all_seances();

		$this->load->view('header', $data);
		$this->load->view('menu');
		$this->load->view('seances/home');
		$this->load->view('footer');
		$this->load->view('end');
    }
    
    public function list($id)
    {
		$seance = $this->seances->get_seance_data($id);

		if(! isset($seance))
		{
			show_404();
		}

		$data = array();
		$data["seance"] = $seance;
		$data['title'] = $seance->title;
		$data['filename'] = 'style';
		$data['desc'] = $seance->description;

		$this->load->view('header', $data);
		$this->load->view('menu');
		$this->load->view('seances/seance_template', $data);
		$this->load->view('footer');
		$this->load->view('end');
    }
}