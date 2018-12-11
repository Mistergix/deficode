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
		if($this->today >= $this->start_date || ENVIRONMENT == 'development')
		{
			$menu_links = ["label" => "#url"];
			$this->load_page("landing_page", ["menu_links" => $menu_links, "title" => "Déficode : L'informatique au collège", "styles" => ["main"], "scripts" => ["main"], "description" => "Présentation du défiocde (l'informatique au collège) : qui sommes-nous ?, qui est Parkours ?, le programme proposé, la page de Foire aux questions et le bouton pour nous contacter"]);
		}
		else
		{
			redirect('/registerchild');
		}
		
	}
}
