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

			$data = ["creators" => $this->getCreators(), "periods" => $this->getPeriods(), "faq" => $this->getFaq()];

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

	private function getPeriods()
	{
		$period1 = ["name" => "Base de l'informatique", "description" => "L'aventure commence ! Votre enfant apprendra les notions essentielles de l'informatique, grâce au langage de programmation Python. Il s'agit d'un langage très utilisé par les professionnels et facile à apprendre.", "span" => "Du 11/01/2019 au 22/02/2019"];
		$period2 = ["name" => "Approfondissement", "description" => "L'aventure continue ! Votre enfant approfondira ses maîtrises en informatique en codant un jeu. Nous n'avons pas encore décidé de la façon de procéder.", "span" => "Du 15/03/2019 au 19/04/2019"];
		$period3 = ["name" => "Développement web", "description" => "L'aventure s'achève ! Durant cette période, votre enfant créera son propre site internet et aura la possibilité de le mettre en ligne.", "span" => "Du 10/05/2019 au 28/06/2019"];
		return [$period1, $period2, $period3];
	}

	private function getFaq()
	{
		$faq = [];
		$faq["Quand ont lieu les séances ?"] = "Les séances ont lieu tous les vendredi soir (hors-vacances) de 17h30 à 19h.";
		$faq["Quel-est le tarif ?"] = "Le tarif est de 19€/séance. La première séance est gratuite.";
		$faq["Combien y-a-t-il de séances par période ?"] = "Il y'a 7 séances la première période, 6 la seconde, et 8 la dernière.";

		return $faq;
	}
}
