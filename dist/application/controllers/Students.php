<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("Basecontroller.php");

class Students extends Basecontroller 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load_page("students/landing_page", ["menu_links" => $this->getMenuLinks(), "title" => "Déficode : Espace élèves", "styles" => ["main"], "scripts" => ["main"], "description" => "La page d'accueil des élèves du déficode"]);
	}

	public function quizz()
	{
		// redirect to quizz according to date
		$quizz_data = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbwAqcPNcb6murqs8yR_L9ou9CUplJi3ziuqAT7dsIHcinOHz6I/exec'));
		$quizz_link = $quizz_data->quizz_link;
		if(!isset($quizz_link))
		{
			show_404();
		}

		$this->load_page("students/quizz", ["quizz_link" => $quizz_link, "menu_links" => $this->getMenuLinks(), "title" => "Déficode : Quizz de la semaine", "styles" => ["main"], "scripts" => ["main"], "description" => "La page qui redirige vers le quizz de la semaine du déficode"]);
	}

	public function sumup()
	{
		$this->load->library('datetofile');
		$file_names = $this->datetofile->getFilesNames("sumup");
		$views = [];
		foreach ($file_names as $name) {
			$views[$name] = $this->load->view("students/sumup/$name", NULL, TRUE);
		}
		$this->load_page("students/sumup", ["sumups" => $views, "menu_links" => $this->getMenuLinks(), "title" => "Déficode : Récap' des séances", "styles" => ["main"], "scripts" => ["main"], "description" => "Récapitulatif de toutes les séances précedentes, incluant la séance courante"]);
	}

	public function seances()
	{
		$this->load->library('datetofile');
		$file_names = $this->datetofile->getFilesNames("seance");
		$dates = $this->datetofile->getDates();

		$seances_links = [];
		for ($i=0; $i < count($file_names); $i++) { 
			$label = "Séance " . ($i+1) . " ($dates[$i])";
			$file_name = $file_names[$i];
			$seances_links[$label] = ["url" => "seances/seance/$file_name"];
		}
		$this->load_page("students/seances", ["seances_links" => $seances_links, "menu_links" => $this->getMenuLinks(), "title" => "Déficode : Liste des séances", "styles" => ["main"], "scripts" => ["main"], "description" => "Récapitulatif de toutes les séances précedentes, incluant la séance courante"]);
	}

	public function other()
	{
		$others_links = ["Installer Python et Pyzo" => ["url" => "install_python"]];

		$this->load_page("students/other", ["others_links" => $others_links, "menu_links" => $this->getMenuLinks(), "title" => "Déficode : Autres", "styles" => ["main"], "scripts" => ["main"], "description" => "Autres liens et ressources"]);
	}

	private function getMenuLinks()
	{
		$menu_labels = ["Accueil", "Le récap'", "Les séances", "Autres"];
		$menu_keys = ["", "students/sumup", "students/seances", "students/other"];
		$menu_links = [];

		for ($i=0; $i < count($menu_labels); $i++) { 
			$key = $menu_keys[$i];
			$label = $menu_labels[$i];
			$menu_links[$label] = ["url" => $key, "classes" => ""];
		}

		return $menu_links;
	}
}
