<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seances extends CI_Controller
{
	public function index()
	{
		$data = array();
		$data['title'] = "Les séances";
		$data['filename'] = 'style';
		$data['desc'] = "Liste des séances de Python";

		$this->load->view('header', $data);
		$this->load->view('menu');
		$this->load->view('seances/home');
		$this->load->view('footer');
		$this->load->view('end');
    }
    
    public function list($page)
    {
        if ( ! file_exists(APPPATH.'views/seances/list/'. $page . '.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data = array();
		$data['title'] = "Séance";
		$data['filename'] = 'style';
		$data['desc'] = "Séance de Python";

		$this->load->view('header', $data);
		$this->load->view('menu');
		$this->load->view('seances/list/' . $page);
		$this->load->view('footer');
		$this->load->view('end');
    }
}