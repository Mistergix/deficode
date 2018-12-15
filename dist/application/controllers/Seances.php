<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("Basecontroller.php");

class Seances extends Basecontroller 
{
	public function seance($page)
	{
		if ( ! file_exists(APPPATH.'views/students/seances/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
		}
		
		$this->load_page("students/seances/$page", ["menu_links" => $this->getMenuLinks(), "title" => "Déficode - Séance", "styles" => ["main"], "scripts" => ["main"], "description" => "Une séance du déficode"]);
	}

	private function getMenuLinks()
	{
		$menu_labels = ["Accueil", "Espace élève"];
		$menu_keys = ["", "students"];
		$menu_links = [];

		for ($i=0; $i < count($menu_labels); $i++) { 
			$key = $menu_keys[$i];
			$label = $menu_labels[$i];
			$menu_links[$label] = ["url" => $key, "classes" => ""];
		}

		return $menu_links;
	}
}
