<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
	<div class="container">
		<div class="row  white-box">
			<div class="col-12">
				<h1>Python, c'est quoi ?</h1>
				<p>
					Python est un <strong>langage de programmation</strong>.
				</p>
				<p>
					Un langage de programmation permet de parler avec l'ordinateur.
				</p>
				<p class="warning">
					Tout comme on peut faire des fautes en français, on peut faire des fautes en Python !
				</p>
				<p>
					Les fichiers Python se terminent en <strong>.py</strong>, n'ont pas d'accents et d'espaces.
				</p>
				<p class="example">
					mon_programme.py
				</p>
			</div>
		</div> <!-- END ROW -->
		<div class="row  white-box">
			<div class="col-12">
				<h1>On commence !</h1>
				<p>
					On va utiliser le module <strong>turtle</strong> de Python.
				</p>
				<div class="exercice">
					<p>
						Ouvre Pyzo.
					</p>
					<p>
						Crée un fichier <span class="file">turtle_introdution.py</span>.
					</p>
					<p>
						Tape le code suivant et exécute-le :
					</p>
					<div class="code-box">
						<pre>
import turtle as trt

trt.forward(50)
trt.right(90)
trt.backward(50)
trt.left(90)

trt.done()
						</pre>
					</div>
					<p>
						Que font les commandes <code>trt.forward</code>, <code>trt.backward</code>, <code>trt.left</code> et <code>trt.right</code> ?
					</p>
				</div>
				<p>
					Pour pouvoir utiliser turtle, on a écrit la ligne <code>import turtle as trt</code>.
				</p>
				<p>
					Quand on utilise turtle, il faut toujours <strong>terminer</strong> le programme par <code>trt.done()</code>.
				</p>
			</div>
		</div> <!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Un carré</h1>
				<div class="exercice">
					<p>
						Crée un fichier <span class="file">carre.py</span>.
					</p>
					<p>
						Tape le code suivant et exécute-le :
					</p>
					<div class="code-box">
						<pre>
import turtle as trt

trt.forward(70)
trt.left(90)
trt.forward(70)
trt.left(90)

trt.done()
						</pre>
					</div>
					<p>
						Complète le code précédent pour dessiner un <strong>carré</strong>.
					</p>
				</div>
			</div>
		</div><!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Les variables</h1>
				<div class="exercice">
					<p>
						Modifie le code précédent pour que le carré soit plus grand.
					</p>
				</div>
				<p>
					Pour modifier la taille du carré, tu dois modifier 4 nombres !
				</p>
				<p>
					Pour éviter cela, on utilise des <strong>variables</strong>.
				</p>
				<p>
					Une variable est une boîte nommée, qui contient une valeur.
				</p>
				<p class="example">
					La variable <code>age</code> contient la valeur 15.
				</p>
				<p>
					En Python, pour créer la variable <code>age</code> qui contient 15, on écrit :
				</p>
				<div class="code-box">
					<pre>
age = 15
					</pre>
				</div>
				<p class="warning">
					Les noms que l'on donne aux variables ne doivent <strong>PAS</strong> contenir d'accents ou d'espaces.
				</p>
				<div class="exercice">
					<p>
						Crée un fichier <span class="file">carre_variable.py</span>.
					</p>
					<p>
						Tape et exécute le code suivant :
					</p>
					<div class="code-box">
						<pre>
import turtle as trt

tortue = trt.Turtle()

distance = 70
angle = 90

tortue.forward(distance)
tortue.left(angle)
tortue.forward(distance)
tortue.left(angle)
tortue.forward(distance)
tortue.left(angle)
tortue.forward(distance)
tortue.left(angle)

trt.done()
						</pre>
					</div>
					<p>
						Modifie le code précédent pour que le carré soit plus grand.
					</p>
				</div>
				<p>
					Cette fois-ci tu n'as plus qu'un nombre à modifier !
				</p>
			</div>
		</div> <!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Répéter du code (boucle for)</h1>
				<p>
					Le code précedent est embêtant, on a <code>tortue.forward(distance)</code> et <code>tortue.left(angle)</code> répétés 4 fois !
				</p>
				<p>
					Heureusement, on a la boucle for qui permet de dire à l'ordinateur :
				</p>
				<q>
					Répète ce morceau de code 12 fois !
				</q>
				<div class="exercice">
					<p>
						Crée un fichier <span class="file">test_boucle_for.py</span>.
					</p>
					<p>
						Tape et exécute le code suivant :
					</p>
					<div class="code-box">
						<pre>
import turtle as trt

distance = 70
angle = 90

for compteur in range(4):
	trt.forward(distance)
	trt.left(angle)

trt.done()
						</pre>
					</div>
				</div>
				<p>
					Et boum le code est déjà plus court !
				</p>
				<p class="warning">
					Il ne faut pas oublier de <strong>décaler</strong> après la ligne du for. 
					Ceci est très important car cela indique quelle partie du code répéter, et 
					quelle partie du code ne pas répéter.
				</p>
			</div>
		</div><!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Les opérations</h1>
				<p>
					On peut demander à Python de faire des calculs pour nous.
				</p>
				<div class="exercice">
					<p>
						Crée un fichier <span class="file">operations.py</span>.
					</p>
					<p>
						Tape et exécute le code suivant :
					</p>
					<div class="code-box">
						<pre>
import turtle as trt

a = 100
b = 25

trt.write(a + b)
trt.forward(30)

trt.done()

						</pre>
					</div>
					<p>
						A quoi sert la commande <code>trt.write</code> ?
					</p>
					<p>
						Remplace le <code>+</code> par un <code>-</code>, et exécute le programme.
					</p>
					<p>
						Fais de même avec le symbole <code>*</code>.
					</p>
					<p>
						Enfin avec le symbole <code>/</code>.
					</p>
				</div>
				<p>
					Tu sais <strong>additionner</strong>, <strong>soustraire</strong>, 
					<strong>multiplier</strong> et <strong>diviser</strong> en Python !
				</p>
			</div>
		</div><!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Le compteur de la boucle for</h1>
				<p>
					Le compteur de la boucle for est une variable qu'on peut utiliser.
				</p>
				<div class="exercice">
					<p>
						Tape et teste le code suivant :
					</p>
					<div class="code-box">
						<pre>
import turtle as trt

distance = 70
angle = 90

for compteur in range(4):
	trt.write(compteur)
	trt.forward(distance)
	trt.left(angle)

trt.done()

						</pre>
					</div>
					<p>
						Quelles-sont les valeurs successives de <code>compteur</code> ?
					</p>
				</div>
			</div>
		</div><!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Les comparaisons</h1>
				<div class="exercice">
					<p>
						Crée un fichier <span class="file">comparaisons.py</span>.
					</p>
					<p>
						Teste le code suivant :
					</p>
					<div class="code-box">
						<pre>
import turtle as trt

a = 15

trt.write(a == 15)
trt.forward(40)

trt.done()

						</pre>
					</div>
					<p>
						Remplace <code>==</code> par <code>!=</code> et teste le programme.
					</p>
					<p>
						Fais de même avec <code>&lt;</code>, <code>&lt;=</code>, <code>&gt;</code> et <code>&gt;=</code>.
					</p>
				</div>
				<p>
				<code>==</code>, <code>!=</code>, <code>&lt;</code>, <code>&lt;=</code>, <code>&gt;</code> et <code>&gt;=</code> sont
				des comparateurs. Ils permettent de comparer des choses entre elles.
				</p>
				<ul>
					<li><code>a == 15</code> : a est-il égal à 15 ?</li>
					<li><code>a != 15</code> : a est-il différent de 15 ?</li>
					<li><code>a &lt; 15</code> : a est-il <strong>strictement</strong> plus petit que 15 ?</li>
					<li><code>a &lt;= 15</code> : a est-il inférieur ou égal à 15 ?</li>
					<li><code>a &gt; 15</code> : a est-il <strong>strictement</strong> plus grand que 15 ?</li>
					<li><code>a &gt;= 15</code> : a est-il supérieur ou égal à 15 ?</li>
				</ul>
			</div>
		</div><!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Les structures conditionnelles (if, elif, else)</h1>
				<p>
					<strong>if</strong>, <strong>elif</strong>, <strong>else</strong> permettent de dire <strong>si</strong>, 
					<strong>sinon si</strong> et <strong>sinon</strong> en Python.
				</p>
				<div class="exercice">
					<p>
						Crée un fichier <span class="file">conditions.py</span>.
					</p>
					<p>
						Tape et teste le code suivant :
					</p>
					<div class="code-box">
						<pre>
import turtle as trt

compteur = 0

if compteur == 0:
	trt.color("blue")
elif compteur == 1:
	trt.color("red")
elif compteur == 2:
	trt.color("green")
else :
	trt.color("orange")

trt.forward(70)
trt.done()
						</pre>
					</div>
					<p>
						A quoi sert la commande <code>trt.color</code> ?
					</p>
					<p>
						Change la valeur de <code>compteur</code> à 1, 2, 3 et 150.
					</p>
					<p>
						Quelle couleur prend le trait ? Pourquoi ?
					</p>
				</div>
				<p class="warning">
					Encore une fois, attention à l'indentation (le décalage).
				</p>
				<div class="exercice">
					<p>
						Crée un fichier <span class="file">carre_avec_condition.py</span>.
					</p>
					<p>
						Tape et teste le code suivant :
					</p>
					<div class="code-box">
						<pre>
import turtle as trt

distance = 70
angle = 90

for compteur in range(4):
	if compteur == 0:
		trt.color("blue")
	elif compteur == 1:
		trt.color("red")
	elif compteur == 2:
		trt.color("green")
	else :
		trt.color("orange")
	trt.write(compteur)
	trt.forward(distance)
	trt.left(angle)

trt.done()
						</pre>
					</div>
				</div>
			</div>
		</div> <!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Les fonctions</h1>
				<p>
					Les <strong>fonctions</strong> permettent de dire à l'ordinateur des choses comme :
				</p>
				<p>
					Dessine moi un carré de 90 pixels. Puis un carré de 120 pixels. Et enfin un carré de 200 pixels.
				</p>
				<p>
					1) Pour commencer, il faut dire à l'ordinateur <strong>comment</strong> dessiner un carré. 
					C'est la <strong>définition</strong> de la fonction.
				</p>
				<p>
					2) Puis on demande à l'ordinateur de d'exécuter la fonction, c'est-à-dire dessiner des carrés. C'est <strong>l'appel</strong> de la fonction.
				</p>
				<div class="exercice">
					<p>
						Crée un fichier <span class="file">fonction_carre.py</span>.
					</p>
					<p>
						Teste ce code :
					</p>
					<div class="code-box">
						<pre>
import turtle as trt

def carre(distance):
	for compteur in range(4):
		trt.forward(distance)
		trt.left(90)

carre(90)
carre(120)
carre(200)

trt.done()
						</pre>
					</div>
					<p>
						Que font les commandes <code>carre(90)</code>, <code>carre(120)</code> et <code>carre(200)</code>.
					</p>
				</div>
				<p>
					<code>def carre(distance) :</code> est la définition de la fonction. Elle fait tout ce qui est indenté en dessous d'elle.
				</p>
				<p>
					<code>distance</code> est un <strong>paramètre</strong> (ou argument) de la fonction. C'est une variable que la fonction peut utiliser.
				</p>
				<p>
					<code>carre(90)</code> est un appel de la fonction <code>carre</code>. 
					On passe la valeur 90 en argument. La fonction stocke cette valeur dans la variable <code>distance</code>.
				</p>
				<div class="exercice">
					<p>
						Crée un fichier <span class="file">fonction_triangle.py</span>.
					</p>
					<p>
						Ecris une fonction <code>triangle(distance)</code> qui dessine un triangle. 
						Tu peux t'inspirer de la fonction <code>carre</code>.
					</p>
				</div>
			</div>
		</div><!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Des flocons de neige</h1>
				<div class="exercice">
					<p>
						Télécharge ce <a href="<?= code_url("seance1/flocon_squelette");?>" download="flocon_squelette.py">fichier Python <i class="fa fa-download" aria-hidden="true"></i></a>.
					</p>
					<p>
						Complète la fonction <code>dessinerV</code> en remplaçant les ... (Tu peux t'aider des images ci-dessous). L'argument 
						<code>tailleV</code> correspond à la longueur du trait.
					</p>
					<div class="row">
						<div class="col-12 col-md-6 col-lg-3">
							<img class="img-fluid" src="<?=img_url("seance1/flocon1")?>" alt="Position initiale de la tortue">
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<img class="img-fluid" src="<?=img_url("seance1/flocon2")?>" alt="Rotation droite">
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<img class="img-fluid" src="<?=img_url("seance1/flocon3")?>" alt="Avant">
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<img class="img-fluid" src="<?=img_url("seance1/flocon4")?>" alt="Arrière">
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<img class="img-fluid" src="<?=img_url("seance1/flocon5")?>" alt="Rotation gauche">
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<img class="img-fluid" src="<?=img_url("seance1/flocon6")?>" alt="Avant">
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<img class="img-fluid" src="<?=img_url("seance1/flocon7")?>" alt="Arrière">
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<img class="img-fluid" src="<?=img_url("seance1/flocon8")?>" alt="Rotation droite">
						</div>
					</div> <!-- END IMAGES -->
					<p>
						Complète la fonction <code>dessinerBranche</code> en remplaçant les ... Elle avance de <code>tailleV</code>, elle dessine un V.
						Elle recommence <code>nombreV</code> fois. A la fin, elle <strong>recule</strong> au point de départ.
					</p>
					<p>
						Complète la fonction <code>dessinerFlocon</code> en remplaçant les ... Elle dessine un flocon ayant <code>nombreBranche</code>
						branches. Elle tourne un peu après avoir dessiné une branche. A la fin du dessin, elle a fait un tour complet.
					</p>
					<p>
						Appelle la fonction <code>dessinerFlocon</code> avec les arguments (nombres) de ton choix.
					</p>
				</div>
			</div>
		</div> <!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Pour aller plus loin</h1>
				<div class="exercice">
					<p>
						Crée une fonction <code>polygone(distance, nombre_cotes)</code> qui permet de dessiner un polygone à 
						<code>nombre_cotes</code> côtés, et donc chaque côté a pour longueur <code>distance</code>.
					</p>
					<p>
						Crée des fonctions pour dessiner ces figures (on doit pouvoir configurer le nombre de tours que l'on fait pour les deux premières):
					</p>
					<div class="row">
						<div class="col-12 col-md-6 col-lg-3">
							<img class="img-fluid" src="<?=img_url("seance1/path_rectiligne")?>" alt="Chemin rectangulaire">
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<img class="img-fluid" src="<?=img_url("seance1/spirale")?>" alt="Spirale rectangulaire">
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<img class="img-fluid" src="<?=img_url("seance1/triforce")?>" alt="Triforce">
						</div>
						<div class="col-12 col-md-6 col-lg-3">
							<img class="img-fluid" src="<?=img_url("seance1/cake")?>" alt="Gateau">
						</div>
					</div> <!-- END IMAGES -->
					<p>
						Télécharge la <a href="<?= code_url("seance1/correction_seance1", "zip");?>" download="correction_seance1.zip">correction <i class="fa fa-download" aria-hidden="true"></i></a>.
					</p>
				</div>
			</div>
		</div>
	</div>
</main>
