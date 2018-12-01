<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("Basecontroller.php");

class Welcome extends Basecontroller 
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
		$css_filename = "main";

		if($this->today >= $this->start_date)
		{
			$this->load_page("landing_page", ["title" => "Déficode", "css_filename" => $css_filename, "scripts" => ["main"]]);
		}
		else
		{
			redirect('/registerchild');
		}
		
	}
}
