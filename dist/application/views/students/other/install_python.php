<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
	<div class="container">
		<div class="row white-box">
			<div class="col-12">
				<h1>Installer Pyzo et Python chez soi</h1>
				<p>
					Rends toi sur <a href="https://pyzo.org/start.html#step 1: install the pyzo ide" target="_blank" rel="noopener noreferrer">le site de Pyzo</a>.
				</p>
				<p>
					Choisis le lien correspondant à ton système (Windows, Mac, Linux) pour télécharger l'installateur : 
				</p>
				<img class="img-fluid" src="<?=img_url("install_python/pyzo_install_pyzo")?>" alt="Choix de pyzo selon le système d'exploitation">
				<p>
					Lance l'installateur, tu devrais voir quelque chose comme ça :
				</p>
				<img class="img-fluid" src="<?=img_url("install_python/pyzo_installator")?>" alt="Interface de l'installateur de Pyzo">
				<p>
					Clique 3 fois sur <code>Next</code>, puis sur <code>Install</code> et attends. Clique enfin sur <code>Finish</code>.
				</p>
				<p>
					Retourne sur <a href="https://pyzo.org/start.html#step 2: install python environment" target="_blank" rel="noopener noreferrer">le site de Pyzo</a> et sélectionne Miniconda :
				</p>
				<img class="img-fluid" src="<?=img_url("install_python/pyzo_install_python")?>" alt="Choix d'une distribution Python">
				<p>
					Choisis le lien correspondant à ton système (Windows, Mac, Linux). Tu peux te rendre sur <a href="https://www.commentcamarche.net/faq/19107-32-ou-64-bits-comment-savoir" target="_blank" rel="noopener noreferrer">ce site</a> pour savoir si ton ordinateur est 64-bit ou en 32-bit.
				</p>
				<img class="img-fluid" src="<?=img_url("install_python/miniconda")?>" alt="Choix de Miniconda">
				<p>
					Lance l'installateur et clique sur <code>Next</code>, <code>I agree</code>, <code>Next</code>, <code>Next</code>, <code>Install</code>, <code>Next</code> et enfin <code>Finish</code>.
				</p>
				<p>
					Ouvre Pyzo et dans la partie droite clique sur "Use this environment". Et voilà tu as installé Python et Pyzo !
				</p>
				<p>
					Happy coding !
				</p>
			</div>
		</div>
	</div>
</main>
