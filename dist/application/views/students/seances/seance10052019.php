<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="container-fluid below-menu" id="main">
	<div class="container">

		<div class="row white-box">
			<div class="col-12">
				<h1>Gitlab</h1>
				<p>
					Quand on développe des plus gros projets, il devient nécessaire de partager notre code avec d'autres développeurs,
					de stocker l'historique des modifications du code etc.
				</p>
				<p>
					Les développeurs professionnels utilisent un outil appelé <a href="https://git-scm.com/" target="_blank" rel="noopener noreferrer">git</a>.
					Il s'agit d'un outil très puissant, assez compliqué à prendre en main, c'est pour quoi nous ne l'utiliserons <b>pas</b>, tout du moins directement.
				</p>
				
				<p>
					Voici un exemple de code qui utilise git :
				</p>
				<div class="code-box">
					<pre>
	echo "# tmp" >> README.md
	git init
	git add README.md
	git commit -m "first commit"
	git remote add origin git@github.com:Mistergix/tmp.git
	git push -u origin master
					</pre>
				</div>
				<p>
					Heureusement, il existe des outils un peu plus simples, basés sur git, comme Github et Gitlab.
				</p>
				<p>
					Nous utiliserons <a href="https://gitlab.com/" target="_blank">Gitlab</a>, mais nous t'invitons chez toi à aller voir <a href="https://github.com/" target="_blank">Github</a>.
				</p>
				<p>
					Avant de commencer à utiliser Gitlab pour sauvegarder ton code, voici un peu de vocabulaire :
				</p>
				<ul>
					<li><b>Un dépôt</b> : ou encore un repository, ou un repo, c'est un dossier en ligne dans lequel un projet informatique est sauvegardé</li>
					<li><b>Un commit</b> :  Fait d'enregistrer dans un outil de gestion de versions une nouvelle version d'un ensemble de fichiers.</li>
				</ul>
			</div>
		</div>

		<div class="row white-box">
		<div class="col-12">
			<h1>Utilisons Gitlab</h1>
			<div class="exercice">
				<p>
					Rends-toi sur <a href="https://gitlab.com/" target="_blank">Gitlab</a>, clique sur Register et crée toi un compte, tu as besoin d'une adresse email.
				</p>
				<p>
					Pour mettre le site en français, tu peux cliquer tout en haut à droite sur la flèche qui pointe vers le bas puis clique sur Settings. Dans la barre à gauche, clique sur Preference. Enfin, tout en bas dans le menu Localization,
					tu peux choisir la langue française. Attention, la traduction française n'est pas complète !
				</p>
				<p>
					Tu peux retourner sur la page d'accueil en cliquant sur Gitlab en haut à gauche. Clique sur "Create a project", tu devrais voir ça :
				</p>
				
				<div class="col-12 col-md-10 offset-md-1">
                    <img class="img-fluid" src="<?=img_url("p3/seance1/project_gitlab_create", "png");?>" alt="Page de création projet Gitlab">
                </div>
				<p>
					Donne un nom à ton projet de test. Tu peux lui donner une description. Tu  peux choisir de rendre ton repo privé, public ou interne, cela définit qui peut voir ton code. Enfin clique sur Créer projet. 
				</p>
				<p>
					Voici la page de ton projet : 
				</p>
				<div class="col-12 col-md-10 offset-md-1">
                    <img class="img-fluid" src="<?=img_url("p3/seance1/project_gitlab_manage", "png");?>" alt="Page de création projet Gitlab">
                </div>
				<p>
					Clique sur le buton vert "Nouveau fichier". Appelle-le hello.py et rajoute cette ligne dedans : print("hello"). Dans message du commit, rajoute : "J'ai créé ce fichier qui afficher Hello". Clique sur Commit changes.
				</p>
				<p>
					Ton fichier est en ligne ! 
				</p>
				<div class="col-12 col-md-10 offset-md-1">
                    <img class="img-fluid" src="<?=img_url("p3/seance1/commit", "png");?>" alt="Page de création projet Gitlab">
                </div>
				<p>
					Tu peux éditer, remplacer et supprimer ton fichier avec les options en bas à droite de l'image. Clique sur EDI Web. 
				</p>
				<p>
					Ici tu peux modifier tes dossiers et fichiers. Remplace print("hello") par print("hello world"). Clique sur Commit. Tu peux voir que Gitlab te montre les différences entre avant et après. Ceci 
					est très pratique quand ton projet est plus gros !
				</p>
				<div class="col-12 col-md-10 offset-md-1">
                    <img class="img-fluid" src="<?=img_url("p3/seance1/ide", "PNG");?>" alt="Page de création projet Gitlab">
                </div>
				<p>
					Remplis Message du commit avec : J'ai remplacé hello par hello world.
				</p>
				<p>
					Il y a d'autres options, mais elles sont destinées à des gens plus expérimentés ! Clique sur le bouton vert Etape & commit.
				</p>
				<p>
					Tu peux retourner sur ton projet en cliquant sur son nom en haut à gauche. Voici à quoi ressemble un vrai projet (<a href="https://github.com/SocialGouv/tutoriel-gitlab" target="_blank" rel="noopener noreferrer">source</a>) :
				</p>
				<div class="col-12 col-md-10 offset-md-1">
                    <img class="img-fluid" src="<?=img_url("p3/seance1/project-home", "png");?>" alt="Page de création projet Gitlab">
                </div>
				<p>
					Dans la barre à gauche, il y a plein d'options super cools, clique sur Dépôt puis Graphiqu et tada ! Tu peux voir comment ton projet a évolué au cours du temps !
				</p>
				<p>
					Toujours dans la barre à gauche, clique sur Paramètres puis Général, ici tu peux faire plein de trucs, dont personnaliser un peu ton projet avec des images et une description !
				</p>
				<p>
					Supprime ce projet inutile en cliquant sur Expand tout en bas dans la section Adavanced. Puis tout en bas clique sur Supprimer le projet. Il faut écrire son nom pour le supprimer.
				</p>
			</div>
		</div>
		</div>

		<div class="row white-box">
		<div class="col-12">
			<h1>Mettre ton site en ligne avec Gitlab</h1>
			<div class="exercice">
			</div>
		</div>
		</div>

	</div>
</main>
