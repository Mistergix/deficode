<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main class="container-fluid" id="main">
  <div class="container">
  <div class="row  white-box">
			<div class="col-12">
			<h1>Récap' de la séance 5</h1>
			</div>
	</div>
	
<div class="row white-box">
				<div class="col-12">
					<h1>Les tuples <code>tuple</code></h1>
          <p>
            Un tuple se comporte comme à liste à trois exceptions prêt:
            <ul>
              <li>Il est encadré par des parenthèses ( ) et non des crochets [ ]</li>
              <li>Il ne peut pas changer de longueur</li>
              <li>On ne peut pas changer ses élements</li>
            </ul>
          </p>
          <div class="example">
            <p>
              Le tuple est ici composé de 3 éléments désignant la position d'un avion
            </p>
    				<div class="code-box">
							<pre>
position = (11.0, 1100.2, 45.2)
						  </pre>
					  </div>
					</div>
						<p>
							On peut décomposer un tuple :
						</p>
						<div class="example">
    				<div class="code-box">
							<pre>
x, y, z = position
						  </pre>
					  </div>
					</div>
					<p class="warning">
					Il doit y avoir <b>autant de variables à gauche que d'éléments dans le tuple</b> pour que cela fonctionne.
          </p>
            <p>
              On souhaite faire descendre l'avion de 1.0 mètre.
            </p>
            <p>
              Pour modifier une valeur dans un tuple,
              on est obligé de refaire un nouveau tuple:
            </p>
						<div class="example">
      			<div class="code-box">
							<pre>
x, y, z = position
y = y - 1
position = (x, y, z)
print(position)
						  </pre>
					  </div>
					</div>
				</div>
			</div>
			<div class="row white-box">
			<div class="col-12">
				<h1>Attributs et méthodes statiques</h1>
				<p>
					Les attributs statiques n'appartiennent pas à une instance mais à la classe elle même.
					Autrement dit, ils sont <b>communs</b> à toutes les instances.
				</p>
				<p>
					De même les méthodes statiques sont communes à toutes les instances. Elles
					n'ont <b>PAS</b> de self.
				</p>
				<p>
					Pour accéder à un attribut ou une méthode statique, on utilise le nom de la classe : <code>[nom_de_la_classe].[attribut ou méthode]</code>
				</p>
			</div>
		</div>
		<div class="row white-box">
			<div class="col-12">
				<h1>Les couleurs RGB</h1>
				<p>
						Rends toi sur <a href="https://www.google.com/search?source=hp&ei=xbFVXObmD8XwaMDvjRA&q=color+picker&btnK=Recherche+Google&oq=color+picker&gs_l=psy-ab.3..0l10.951.2527..2624...0.0..0.113.997.12j1......0....1..gws-wiz.....0..0i131.ov1Ih9SwCoQ" target="_blank" rel="noopener noreferrer">ce lien google</a>.
				</p>
				<p>
					Les couleurs sont représentées par 3 nombres, <b>R, G, B</b>. Ils peuvent aller de <b>0</b> à <b>255</b>.
				</p>
				<p>
					En Python, on peut utiliser des tuples et des attributs statiques pour représenter des couleurs.
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Commençons avec Pygame !</h1>
				<p class="warning">
					Si tu ne l'as pas déjà fait, tape cette commande dans la console pyzo : <code>pip install pygame</code>
				</p>
				<p>
					Chaque programme Pygame commence par <code>import pygame as pg</code>.
				</p>
				<p>
					Avant d'utiliser Pygame, il faut écrire <code>pg.init()</code>.
				</p>
				<p>
					Pour ouvrir une fenêtre, il faut écrire le code suivant (on passe un tuple comme argument) :
				</p>
				<div class="code-box">
					<pre>
LARGEUR = 400
HAUTEUR = 300
ECRAN = pg.display.set_mode((LARGEUR, HAUTEUR)) # taille 400 x 300 pixels
					</pre>
				</div>
				<p class="warning">
					Si tu as cette erreur : <code>TypeError: argument 1 must be 2-item sequence, not int</code>, 
					c'est que tu n'as pas utilisé un tuple.
				</p>
				<p>
					Pour nommer la fenêtre on tape ce code :
				</p>
				<div class="code-box">
					<pre>
NOM = "Mon jeu"
pg.display.set_caption(NOM)
					</pre>
				</div>
				<p>
					Pour pouvoir limiter le nombre <b>d'images par seconde (FPS)</b>, on utilise une horloge Pygame que l'on obtient avec <code>pg.time.Clock()</code>.
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>La boucle principale</h1>
				<p>
					La <b>boucle principale</b> est une boucle qui tourne tant que le jeu tourne, elle fait trois choses :
				</p>
				<ul>
					<li>Gestion des événements</li>
					<li>Logique du jeu</li>
					<li>Dessin du jeu sur l'écran</li>
				</ul>
			</div>
		</div>
		
		<div class="row white-box">
			<div class="col-12">
				<h1>Les événements</h1>
				<p>
					Les <b>événements</b>, c'est tout ce que le joueur peut faire : presser une touche, cliquer etc.
				</p>
				<p>
					Pygame nous donne la liste des événements avec <code>pg.event.get()</code>. 
					On parcourt cette liste avec une boucle <b>for</b> : <code>for evenement in pg.event.get():</code>.
				</p>
				<p>
					Enfin, on peut accéder au type de l'événement comme ceci : <code>evenement.type</code>.
				</p>
				<p>
					Un type d'événement important :
				</p>
				<ul>
					<li><code>pg.QUIT</code> : quand le joueur clique sur fermer la fenêtre</li>
				</ul>
			</div>
		</div>
		<div class="row white-box">
			<div class="col-12">
				<h1>La logique du jeu</h1>
				<p>
					Après la gestion des événements, on met à jour les variables du jeu selon une certaine <b>logique</b>.
				</p>
				<p>
					Ici, on a la variable <code>position</code>, que l'on va faire aller de gauche à droite indéfiniment :
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Le dessin</h1>
				<p>
					La dernière étape consiste à dessiner sur la fenêtre.
				</p>
				<p>
					On commence d'abord par nettoyer l'écran, avec la commande <code>ECRAN.fill</code>. 
					Puis on dessine tous nos objets. 
					Et enfin, on met à jour l'affichage avec la commande <code>pg.display.update()</code>.
				</p>
				<p>
					Ici, on va dessiner notre objet avec la commande <code>pg.draw.rect</code>, on verra juste après comment elle marche.
				</p>
			</div>
		</div>
		
		<div class="row white-box">
			<div class="col-12">
				<h1>Finir un programme Pygame</h1>
				<p>
					On doit toujours terminer un programme Pygame avec la commande <code>pg.quit()</code>.
				</p>
			</div>
		</div>
		
		<div class="row white-box">
			<div class="col-12">
				<h1>L'affichage</h1>
				<p>
					Quand on écrit <code>ECRAN = pg.display.set_mode((LARGEUR, HAUTEUR))</code>, la variable <code>ECRAN</code>
					contient une <code>Surface</code> sur laquelle on peut dessiner des choses. 
				</p>
				<p class="example">
					Quand on écrit <code>ECRAN.fill((0, 0, 0))</code>, on remplit la Surface de noir.
				</p>
				<p>
					Une Surface contient des <b>pixels</b>. Les coordonnées démarrent de (0, 0) en haut à gauche et s'arrêtent à (LARGEUR - 1, HAUTEUR - 1) en bas à droite,
					comme indiqué par cette image :
				</p>
				<div class="row">
						<div class="col-12 col-md-6 col-lg-4 offset-lg-4 offset-md-3">
							<img class="img-fluid" src="<?=img_url("seance5/pixels")?>" alt="Position initiale de la tortue">
						</div>
				</div> <!-- END IMAGES -->
				<p class="warning">
					L'axe des <b>ordonnées (y)</b> est inversé ! Pour descendre il faut donc augmenter y.
				</p>
				<p>
					<b>FPS</b> veut dire <i>Frames Per Second</i>. C'est le nombre de fois que l'ordinateur dessine à l'écran par seconde. Par défaut il le fait au maximum. On peut limiter le nombre de FPS (ici à 30) comme ceci :
				</p>
				<p>
					On définit au début une horloge : <code>HORLOGE = pg.time.Clock()</code>, puis dans la boucle principale, on écrit : <code>HORLOGE.tick(30)</code>.
				</p>
				<p>
					Enfin, dans la boucle principale, il faut préciser à Python de mettre à jour l'écran avec <code>pg.display.update()</code>.
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>La classe Rect</h1>
				<p>
					Dans Pygame, tous les objets sont entourés de <b>rectangles</b> pour les délimiter.
				</p>
				<p>
					Pour créer un rectangle il faut 4 nombres :
				</p>
				<ul>
					<li>L'abscisse du coin en haut à gauche, <code>x</code></li>
					<li>L'ordonnée du coin en haut à gauche, <code>y</code></li>
					<li>La largeur du rectangle, <code>largeur</code></li>
					<li>La hauteur du rectangle, <code>hauteur</code></li>
				</ul>
				<p>
					On définit notre rectangle comme cela : <code>mon_rectangle = pg.Rect(x, y, largeur, hauteur)</code>.
				</p>
				<p>
					Une fois qu'on a le rectangle, on peut accéder à plein de données, comme son centre : <code>mon_rectangle.center</code>.
				</p>
				<p>
					Voici la liste de données accessibles :
				</p>
				<p>
					<code>
						x, y,
						top, left, bottom, right,
						topleft, bottomleft, topright, bottomright,
						midtop, midleft, midbottom, midright,
						center, centerx, centery,
						size, width, height,
						w, h
					</code>
				</p>
				<p>
					On peut aussi modifier ces données, ce qui met à jour tout le reste.
				</p>
				</div>
			</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les primitives de dessin</h1>
				<p>
					On utilisera principalement les trois primitives de dessin suivante: <br><br>
					<code>pygame.draw.line(surface, color, start_point, end_point, width)</code>, <br>
					<code>pygame.draw.rect(surface, color, rect_object, width)</code>, <br>
					<code>pygame.draw.ellipse(surface, color, rect_object, width)</code>.
				</p>
				<p>
					<code>pygame.draw.line(surface, color, start_point, end_point, width=1)</code> <br>
					permet de tracer une ligne sur <code>surface</code>, de couleur <code>color</code> (un triplet RGB), qui commence en <code>start_point</code> (paire de coordonnées x,y), qui se termine en <code>end_point</code> (paire x,y) et de largeur <code>width</code>.
				</p>			
				<p>
					<code>pygame.draw.rect(surface, color, rect_object, width=1)</code> <br>
					permet de tracer un rectangle <code>rect_object</code> sur <code>surface</code>, de couleur <code>color</code> (un triplet RGB) et avec un bord large de <code>width</code>.
				</p>
				<p>
					<code>pygame.draw.ellipse(surface, color, rect_object, width=1)</code> <br>
					permet de tracer une ellipse. Les arguments sont les mêmes que <code>pygame.draw.rect</code>, et l'ellipse est inscrite dans le rectangle correspondant.
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les touches du clavier</h1>
				<p>
					Pour savoir si le joueur a appuyé sur "Fermer la fenêtre", on utilise l'événement <code>pg.QUIT</code>.
				</p>
				<p>
					Grâce à l'événement <code>pg.KEYDOWN</code>, on peut savoir si le joueur a appuyé sur une touche du clavier.
				</p>
				<p>
					Si <code>evenement.type == pg.KEYDOWN</code>, alors une touche est pressée. 
				</p>
				<p>
					On écrit <code>touche = evenement.key</code> pour récupérer la touche.
				</p>
				<p>
					Puis on compare (par exemple) à <code>pg.K_LEFT</code> pour savoir si le joueur a appuyé sur la flèche gauche.
				</p>
				<p>
					Voici la <a href="https://www.pygame.org/docs/ref/key.html" target="_blank" rel="noopener noreferrer">la liste des touches Pygame</a>.
				</p>
			</div>
		</div>
		<div class="row white-box">
			<div class="col-12">
				<h1>Pour aller plus loin</h1>
				<p>
					Si tu veux en savoir plus sur Pygame vas sur <a href="https://www.pygame.org/docs/" target="_blank" rel="noopener noreferrer">le site de la documentation Pygame</a>.
				</p>
				<p>
					La POO nous permet de bien organiser notre code Pygame.
				</p>
				<p>
					Quand tu veux créer un jeu Pygame, tu peux utiliser <a href="<?= code_url("seance5/pygame_template");?>" download="template_pygame_.py">ce fichier pygame de base <i class="fa fa-download" aria-hidden="true"></i></a>.
				</p>
				<p>
					Tout ce que nous avons vu (la boucle principale, l'initialisation etc.) a été organisé pour toi.
				</p>
			</div>
		</div>

</div>
</main>


