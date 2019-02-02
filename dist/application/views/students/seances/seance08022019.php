<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
	<div class="container">
		<div class="row white-box">
			<div class="col-12">
				<h1>Les tuples <code>tuple</code></h1>
          		<p>
					Un tuple se comporte comme à liste à trois exceptions prêt:
				</p>
            	<ul>
					<li>Il est encadré par des parenthèses ( ) et non des crochets [ ]</li>
					<li>Il ne peut pas changer de longueur</li>
					<li>On ne peut pas changer ses élements</li>
				</ul>
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
				<div class="exercice">
					<p>
						Complète ce code (remplace les ???) pour que la fonction <code>impots(argent)</code> retourne 
						l'argent qu'il reste après la collecte des impôts et l'argent qui a été collecté.
					</p>
					<div class="code-box">
						<pre>
def impots(argent):
	taxe_pourcent = 33

	collecte = argent * (taxe_pourcent / 100)
	
	il_reste_ca = argent - ???
	
	return (???, collecte)


il_reste_ca, ??? = impots(1000)	
print("il me reste {} €! {}€ ont été pris.".format(???, ???))
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
				<div class="exercice">
					<p>
						Recopie ce code et teste ce code :
					</p>
					<div class="code-box">
						<pre>
class Chaton:
	nombre_de_chatons = 0
	def __init__(self):
		Chaton.nombre_de_chatons += 1

	def AfficherNombreChatons():
		print("Il y a {} chatons".format(Chaton.nombre_de_chatons))

premier_chaton = Chaton()
deuxieme_chaton = Chaton()
troisieme_chaton = Chaton()

Chaton.AfficherNombreChatons()
						</pre>
					</div>
				</div>
				<p>
					Dans l'exercice précédent, <code>nombre_de_chatons</code> est un attribut défini en dehors du <code>__init__</code>,
					il est <b>statique</b>. <code>AfficherNombreChatons</code> n'a <b>PAS</b> de self, elle est statique aussi.
				</p>
			</div>
		</div>
		<div class="row white-box">
			<div class="col-12">
				<h1>Les couleurs RGB</h1>
				<div class="exercice">
					<p>
						Rends toi sur <a href="https://www.google.com/search?source=hp&ei=xbFVXObmD8XwaMDvjRA&q=color+picker&btnK=Recherche+Google&oq=color+picker&gs_l=psy-ab.3..0l10.951.2527..2624...0.0..0.113.997.12j1......0....1..gws-wiz.....0..0i131.ov1Ih9SwCoQ" target="_blank" rel="noopener noreferrer">ce lien google</a>.
					</p>
					<p>
						Sélectionne une couleur que tu aimes.
					</p>
				</div>
				<p>
					Les couleurs sont représentées par 3 nombres, <b>R, G, B</b>. Ils peuvent aller de <b>0</b> à <b>255</b>.
				</p>
				<p>
					En Python, on peut utiliser des tuples et des attributs statiques pour représenter des couleurs.
				</p>
				<div class="exercice">
					<p>
						Tape et exécute le code suivant :
					</p>
					<div class="code-box">
						<pre>
class Couleurs:
		BLEU = (0, 0, 255)
		BLANC = (255, 255, 255)
		JAUNE = (247, 230, 152)

print("On représente du bleu comme ça : {}".format(Couleurs.BLUE))
						</pre>
					</div>
				</div>
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
				<div class="exercice">
					<p>Tape ce code, attention il ne marche pas encore, il faudra le compléter après.</p>
					<div class="code-box">
						<pre>
import pygame as pg

pg.init()

LARGEUR = 400
HAUTEUR = 300
ECRAN = pg.display.set_mode((LARGEUR, HAUTEUR))

NOM = "Mon jeu"
pg.display.set_caption(NOM)

position = (LARGEUR / 2, HAUTEUR / 2)
gauche = True

FPS = 30
HORLOGE = pg.time.Clock()
						</pre>
					</div>
				</div>
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
				<div class="exercice">
					<p>Rajoute ceci à ton programme :</p>
					<div class="code-box">
						<pre>
continuer = True
while continuer :
	# Gestion des événements
	for evenement in pg.event.get():
			if evenement.type == pg.QUIT:
				continuer = False # ça arrête la boucle
						</pre>
					</div>
				</div>
				<p>
					Ici, on vérifie si le joueur clique sur fermer la fenêtre, si oui, on arrête la boucle.
				</p>
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
				<div class="exercice">
					<p>Rajoute ce code au programme (attention, on est toujours dans la boucle principale, il faut espacer correctement).</p>
					<div class="code-box">
						<pre>
	# Logique du jeu 
	x, y = position
	if x < 0 and gauche:
		gauche = False
	elif x > LARGEUR and not gauche :
		gauche = True

	if gauche :
		x -= 5
	else :
		x += 5

	position = (x, y)
						</pre>
					</div>
				</div>
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
				<div class="exercice">
					<p>Complète ton code (on est toujours dans la boucle principale !):</p>
					<div class="code-box">
						<pre>
	# Dessin
	ECRAN.fill((0, 0, 0))

	pg.draw.rect(ECRAN, (255, 0, 0), (x, y, 20, 20))

	pg.display.update()
	HORLOGE.tick(FPS)
						</pre>
					</div>
				</div>
				<p>
					Ici on nettoit l'écran avec du noir, puis on dessine un petit carré rouge à la position voulu, 
					enfin on met à jour l'affichage et on limite les FPS avec la commande <code>HORLOGE.tick</code>.
				</p>
			</div>
		</div>
		
		<div class="row white-box">
			<div class="col-12">
				<h1>Finir un programme Pygame</h1>
				<p>
					On doit toujours terminer un programme Pygame avec la commande <code>pg.quit()</code>.
				</p>
				<div class="exercice">
					<p>Termine ton code (on n'est plus dans la boucle principale !):</p>
					<div class="code-box">
						<pre>
pg.quit()
						</pre>
					</div>
					<p>
						Tu peux enfin le lancer !
					</p>
				</div>
				<p>
					Télécharge <a href="<?= code_url("seance4/pygame_template");?>" download="pygame_template.py">ce fichier</a>, c'est le fichier de <b>base</b> d'un programme Pygame.
				</p>
			</div>
		</div>
	</div>
</main>
