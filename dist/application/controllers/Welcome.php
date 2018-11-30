<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	private $start_date;
	private $today;

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('UTC');
		$this->start_date = strtotime ( '2019-01-17');
		$this->today = strtotime('now');
	}

	public function index()
	{
		if($this->today >= $this->start_date)
		{
			$this->load->view('landing_page');
		}
		else
		{
			$this->load->view('register_child');
		}
		
	}
}
