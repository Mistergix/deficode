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
			$menu_labels = ["Accueil", "Formateurs", "Parkours", "Programme", "FAQ", "Contact"];
			$section_ids = ["home", "creators", "parkours", "program", "faq", "contact"];

			$menu_links = [];
			$sections = [];

			$data = ["creators" => $this->getCreators()];

			for ($i=0; $i < count($section_ids); $i++) { 
				$id = $section_ids[$i];
				$menu_links[$menu_labels[$i]] = "#" . $id;
				$sections[$id] = $this->load->view("landing/sections/$id.php", $data, TRUE);
			}

			$menu_links = ["Accueil" => "#home", "Formateurs" => "#creators","Parkours" => "#parkours", "Programme" => "#program",
			"FAQ" => "#faq", "Contact" => "#contact"];
			$this->load_page("landing/landing_page", ["sections" => $sections, "menu_links" => $menu_links, "title" => "Déficode : L'informatique au collège", "styles" => ["main"], "scripts" => ["main"], "description" => "Présentation du défiocde (l'informatique au collège) : qui sommes-nous ?, qui est Parkours ?, le programme proposé, la page de Foire aux questions et le bouton pour nous contacter"]);
		}
		else
		{
			redirect('/registerchild');
		}
		
	}

	private function getCreators()
	{
		$julian = ["name" => "Julian MERLE", "description" => "Blabla bla. Patati patata", "website" => "#"];
		$nicolas = ["name" => "Nicolas RUCHE", "description" => "Étudiant en informatique. Entrepreneur sur mon temps libre, j'aime beaucoup les activés créatives telles que le dessin ou les origamis.", "website" => "https://mistergix.github.io"];
		return [$julian, $nicolas];
	}
}
