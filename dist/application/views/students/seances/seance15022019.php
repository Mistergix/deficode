<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
	<div class="container">

		<div class="row white-box">
			<div class="col-12">
				<h1>Analyse du jeu Snake</h1>
				<p>
					Au début, le <b>corps</b> du serpent n'a qu'un <b>membre</b>.
				</p>
				<div class="row">
						<div class="col-12 col-md-6 col-lg-4 offset-lg-4 offset-md-3">
							<img class="img-fluid" src="<?=img_url("snake/init")?>" alt="Position initiale de la tortue">
						</div>
				</div> <!-- END IMAGES -->
				<p>
					Quand le <b>serpent</b> touche une <b>pomme</b>, il la <b>mange</b> et son corps <b>grossit</b>. Une <b>nouvelle</b> pomme apparaît <b>aléatoirement</b>.
				</p>
				<div class="row">
						<div class="col-12 col-md-6 col-lg-4 offset-lg-4 offset-md-3">
							<img class="img-fluid" src="<?=img_url("snake/after_eating_apple")?>" alt="Position initiale de la tortue">
						</div>
				</div> <!-- END IMAGES -->
				<p>
					Si la <b>tête</b> du serpent touche un <b>bord</b> de l'écran ou un <b>autre membre</b>, c'est perdu. Pour vérifier ça, 
					on compare les coordonnées de la tête à celles des bords, puis celles des autres membres du corps avec une boucle.
					Pour cela on aura des méthodes qui donnent accès à la <b>tête</b> du serpent et à son corps <b>sans tête</b>.
				</p>
				<p>
					On a des classes utiles pour représenter et manipuler une <b>direction</b>, une <b>couleur</b>, une <b>position</b> et une classe pour faciliter un peu le <b>dessin</b>.
				</p>
				<p>
					On a les classes pour représenter la pomme, le serpent, son corps et les membres qui le composent.
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>A toi de jouer</h1>
				<p class="exercice">
					Télécharge <a href="<?= code_url("snake/snake_squelette");?>" download="snake_a_completer.py">ce fichier</a> et complète-le.
					(Remplace les ???)
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Pour aller plus loin</h1>
				<div class="exercice">
					<p>
						Modifie le code du snake pour rajouter ses fonctionnalités :
					</p>
					<ul>
						<li>Lors du dessin du corps, distinguer la tête du reste du corps : la mettre d'une couleur différente, lui rajouter des yeux etc.</li>
						<li>Dessiner une grille comme cela :
						<div class="row">
						<div class="col-12 col-md-6 col-lg-4 offset-lg-4 offset-md-3">
							<img class="img-fluid" src="<?=img_url("snake/grid")?>" alt="Position initiale de la tortue">
						</div>
						<li>Permettre à deux joueurs de jouer en même temps</li>
				</div> <!-- END IMAGES -->
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</main>
