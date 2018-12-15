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
		$menu_labels = ["Accueil", "Le récap'", "Quizz", "Les séances"];
		$menu_keys = ["", "students/sumup", "students/quizz", "students/seances"];
		$menu_links = [];

		for ($i=0; $i < count($menu_labels); $i++) { 
			$key = $menu_keys[$i];
			$label = $menu_labels[$i];
			$menu_links[$label] = ["url" => $key, "classes" => ""];
		}

		$this->load_page("students/landing_page", ["menu_links" => $menu_links, "title" => "Déficode : Espace élèves", "styles" => ["main"], "scripts" => ["main"], "description" => "La page d'accueil des élèves du déficode"]);
	}
}
