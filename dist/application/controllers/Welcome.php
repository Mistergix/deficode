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
		if($this->today >= $this->start_date)
		{
			$this->load_page("landing_page", ["title" => "Déficode", "styles" => ["main"], "scripts" => ["main"]]);
		}
		else
		{
			redirect('/registerchild');
		}
		
	}
}
