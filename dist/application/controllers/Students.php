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
			$views[] = $this->load->view($name, NULL, TRUE);
		}
		$this->load_page("students/sumup", ["sumups" => $views, "menu_links" => $this->getMenuLinks(), "title" => "Déficode : Récap' des séances", "styles" => ["main"], "scripts" => ["main"], "description" => "Récapitulatif de toutes les séances précedentes, incluant la séance courante"]);
	}

	public function seances()
	{

	}

	private function getMenuLinks()
	{
		$menu_labels = ["Accueil", "Le récap'", "Quizz", "Les séances"];
		$menu_keys = ["", "students/sumup", "students/quizz", "students/seances"];
		$menu_links = [];

		for ($i=0; $i < count($menu_labels); $i++) { 
			$key = $menu_keys[$i];
			$label = $menu_labels[$i];
			$menu_links[$label] = ["url" => $key, "classes" => ""];
		}

		return $menu_links;
	}
}
