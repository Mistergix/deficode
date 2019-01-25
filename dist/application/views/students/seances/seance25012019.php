<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
  <div class="container">
	
		<div class="row white-box">
			<div class="col-12">
				<h1>Le retour des fonctions: mot clef <code>return</code></h1>
        <p>
          Le mot clef <code>return</code> peut servir à arrêter une fonction.
				</p>
        <p>
          Il n'est pas obligatoirement en fin de fonction.
        </p>
        <div class="exercice">
        <p>
          Ecris ce code et teste le avec Pyzo :
        </p>
    			<div class="code-box">
						<pre>
def aEncoreFaim(nb_frites):
  if nb_frites > 42:
    print("j'ai plus faim.")
    return
  print("il y a peu de frites...")

aEncoreFaim(6)
aEncoreFaim(1000)
						</pre>
					</div>
          <p>
            Pourquoi <code>"il y a peu de frites..."</code> n'est écrit qu'une seule fois?
          </p>
				</div>
				<p>
					On peut faire remonter des informations en plaçant une expression après <code>return</code>.
				</p>
        <div class="example">
        <p>
          On peut retourner un élément:
        </p>
					<div class="code-box">
						<pre>
def asterisque():
  return 42
  
code = asterisque()

print(code)
						</pre>
					</div>
				</div>
				<div class="exercice">
					<p>
						Voici une fonction qu'un site de recettes pourrait utiliser :
					</p>
					<p>
						Quand j'écris <code>CreerRecette(3, 200, 50)</code>, la fonction renvoit la phrase : 
						"Cassez 3 oeufs, mélangez-les avec 200 grammes de farine et 50 grammes de beurre".
					</p>
					<p>
					Complète le code ci-dessus pour qu'il fonctionne.
					</p>
					<div class="code-box">
						<pre>
def CreerRecette(nombreOeufs, ???, poidsBeurre):
		recette = "Cassez {} oeufs, mélangez-les avec {} grammes de farine et {} grammes de beurre".format(???, poidsFarine, ???)
		??? recette

recette_traditionnelle = CreerRecette(3, 200, 50)
print(recette_traditionnelle)

recette_grasse = CreerRecette(3, 200, 200)
print(???)
						</pre>
					</div>
				</div>
        
      </div>
		</div>
    
		<div class="row white-box">
			<div class="col-12">
					<h1>Les listes</h1>
					<p>
						On a vu que l'on peut stocker des informations dans des variables.
					</p>
          <p>
            Mais que faire si l'on veut écrire les courses de la semaine en Python? <br>
            Une variable par chose à acheter? Ça deviendrait ingérable rapidement.
          </p>
          <p>
            Python nous propose la même solution que dans la vraire vie: LA <strong>LISTE</strong> ! 
          </p>
					<div class="example">
          <p>
            On peut créer des listes déjà remplies:
          </p>
						<div class="code-box">
							<pre>
liste_de_course = ["fromage", "gateaux", "fraises", "croissant", "papier wc", "vase", "pain"]
							</pre>
						</div>
            <p>
              Mais aussi créer des listes vides:
            </p>
  					<div class="code-box">
							<pre>
liste_vide = []
							</pre>
						</div>
					</div>
  				<div class="exercice">
            <p>
              Toi aussi essaie de créer une liste!
            </p>
  					<div class="code-box">
							<pre>
ma_liste = ...
print(ma_liste)
							</pre>
						</div>
					</div>
          <p>
            Celle-ci peut contenir tout ce que l'on veut:
          </p>
					<ul>
            <li>Des chaînes de caractères</li>
            <li>Des nombres</li>
            <li>Des instances de classes</li>
            <li>Et tout ce qui est une objet Python en général</li>
            </ul>
  				<div class="example">
						<div class="code-box">
							<pre>
def f():
  print("je suis f")
  
class Chien:
  def __init__(self):
    print("wouf")
              
tas = ["camembert", Chien, 42, True, [0, "cocotier"], f, "pain"]
							</pre>
						</div>
            <p>
              Ici, le 5e élément de <code>tas</code> est une liste, 
              le 2e élément de <code>tas</code> est une classe, et 
              le 6e élément de <code>tas</code> est une fonction.
            </p>
					</div>
          <p>
            Les listes peuvent aussi être collées les unes à la suite des autres avec les opérateurs + et * :
          </p>
      		<div class="exercice">
            <p>
              Teste ça!
            </p>
            <div class="code-box">
						  <pre>
objets_perdus = ["crayon HB"] + ["feutre", "cartable"] * 2 + ["le futur de mon frère"]
print(objets_perdus)
						  </pre>
					  </div>
            <p>
              Essaie d'ajouter des éléments et de voir ce que ça donne!
            </p>
          </div>
					</div>
		</div>
    
		<div class="row white-box">
			<div class="col-12">
					<h1>Listes et indices</h1>
					<p>
            Les listes, c'est encore meilleur quand on les utilise pour y faire ranger des informations non pas par nous
            mais par Python directement !
          </p>
          <p>
            On peut accéder à chaque élément de la liste avec ce que l'on appelle son <b>indice</b>.
            Il s'agit en fait de sa position dans la liste...
          </p>
          <p class="warning">
    					En python, le premier élément est d'indice 0
          </p>
    			<div class="exercice">
              <div class="code-box">
							  <pre>
ma_liste = [13, 4, 7]
print(ma_liste[0], ma_liste[1])
							  </pre>
						  </div>
              <p>
                Quel est l'affichage produit par ce bout de code?
              </p>
          </div>
          <p class="warning">
  						L'indice <code>i</code> doit être inférieur <b>strictement</b> à la longueur de la liste !
					</p>
  				<div class="example">
						<div class="code-box">
							<pre>
ma_liste = [13, 4, 7]
print(ma_liste[3])
							</pre>
						</div>
            <p>
              Ce code génère une erreur... car la liste ne contient que 3 éléments.
            </p>
            <p>
              L'indice max de cette liste <code>ma_liste</code> est en effet <code>2</code> !
            </p>
					</div>
          </div>
		</div>
    
		<div class="row white-box">
			<div class="col-12">
          <h1>Listes et boucle <code>for</code></h1>
          <p>
            L'accès par indice est très utile pour parcourir une liste avec une boucle <code>for</code>
          </p>
        	<div class="exercice">
            <p>
              Essaie ça avec Pyzo !
            </p>
              <div class="code-box">
							  <pre>
liste_ports = [80, 8080, 943, 22]
for i in range(3):
  print("virus {} envoyé sur le port {}!".format(i, liste_ports[i]))
							  </pre>
						  </div>
              <p>
                Quel est l'affichage produit par ce bout de code?
              </p>
							<p>
								Que se passe-t-il si on met <code>range(4)</code> ? Pourquoi ?
							</p>
          </div>
          <p>
            Python propose aussi un raccourci lorsque l'on a besoin uniquement de la valeur sans l'indice.
          </p>
          <div class="exercice">
					<p>
						Teste ce code :
					</p>
						<div class="code-box">
							<pre>
endroits_cools = ["Dupanloup", "la maison", "la boulangerie", "Châtelet-les Halles", "Charleroi" ]
for endroit in cool_zones:
  print("Je suis allé à {}!".format(endroit))
							</pre>
						</div>
            <p>
              <code>endroit</code> est un élément de la liste <code>cool_zones</code>. 
              Y assigner des choses ne change pas la liste originale.
              C'est à dire qu'écrire <code>endroit = 5</code> ne sert à rien.
            </p>
					</div>
					</div>
		</div>
    
		<div class="row white-box">
			<div class="col-12">
          <h1>Listes et fonctions usuelles</h1>
					<p>
            Allons maintenant nous munir de fonctions pour manipuler les listes.
          </p>
					<ul>
						<li><code>liste<b>.append(x)</b></code> permet d'ajouter un nouvel élément 
								<code>x</code> à la fin de la liste.</li>
						<li>
								<code>liste<b>.remove(x)</b></code> permet de retirer le premier élément
								<code>x</code> de la liste.
							</li>
							<li>
						Le mot-clé <code>in</code> permet de vérifier si un élément est dans la liste.
            </li>
						<li>
						<code>liste<b>.insert(i, x)</b></code> permet d'insérer un nouvel élément 
              <code>x</code> à la position <code>i</code> dans la liste.
              L'élément qui était alors en <code>i</code> se retrouve en <code>i+1</code>
						</li>
						<li>
						<code><b>len(liste)</b></code> permet d'obtenir le nombre d'éléments de la liste.
						</li>
						<li>
						<code><b>len(liste) - 1</b></code> est donc le dernier indice de la liste.
						</li>
						<li><code><b>liste[i : j]</b></code> permet de tronquer la liste en ne gardant que les éléments de
              <code>liste[i]</code> à <code>liste[j-1]</code>.</li>
					</ul>
          <div class="exercice">
            <p>
              Crée un fichier Python et complète le tout au long de l'exercice!
            </p>
            <p>
              On commence d'abord par créer notre liste, comme précédemment.
            </p>
  					<div class="code-box">
							<pre>
print("Initialisation")
systeme_solaire = ["Vénus", "Tere", "Mars", "Jupiter", "Saturne", "Uranus", "Pluton"]
print(systeme_solaire)
  						</pre>
						</div>
            <p>
              Ajoute Neptune à la liste avec <code>append</code>!
            </p>
    				<div class="code-box">
							<pre>
print("Ajout de Neptune")
...
print(systeme_solaire)
  						</pre>
						</div>
            <p>
              Retire Pluton de la liste des planètes!
            </p>
    				<div class="code-box">
							<pre>
print("Retrait de Pluton")
systeme_solaire.???("Pluton")
print(systeme_solaire)
  						</pre>
						</div>
            <p>
              Ajoute ce code pour vérifier si Pluton est dans la liste :
            </p>
    				<div class="code-box">
							<pre>
if "Pluton" in systeme_solaire :
	print("Pluton est dedans")
else :
	print("Pluton n'est pas dedans")
  						</pre>
						</div>
            <p>
              Insère Mercure en tête de liste! (indice 0)
            </p>
    				<div class="code-box">
							<pre>
print("Insertion de Mercure")
systeme_solaire.???(???, ???)
print(systeme_solaire)
  						</pre>
						</div>
            <p>
              <code>systeme_solaire<b>[i]</b></code> permet donc d'obtenir ou de modifier la valeur de l'élément
              <code>i</code> de la liste.
            </p>
            <p>
              Corrige la faute d'orthographe à "Tere"!
            </p>
    				<div class="code-box">
							<pre>
print("Correction de Terre")
??? = "Terre"
print(systeme_solaire)
  						</pre>
						</div>
            <p>
              Affiche le nombre de planètes!
            </p>
    				<div class="code-box">
							<pre>
print("Il y a {} planètes".format(???))
  						</pre>
						</div>
            <p>
              Affiche le nom de la dernière planète de la liste!
            </p>
    				<div class="code-box">
							<pre>
dernier_indice = ???
derniere_planete = ???
print(derniere_planete)
  						</pre>
						</div>
            <p>
              Affiche le système solaire sans la première et la dernière planète :
            </p>
    				<div class="code-box">
							<pre>
print("Le système solaire sans la première et la dernière planète")
premier_indice = ???
dernier_indice = ???
print(systeme_solaire[??? : ???])
							</pre>
						</div>
					</div>
					
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
						<h1>Les nombres flottants</h1>
						<p>
							Un nombre flottant est un nombre à virgule.
						</p>
						<p class="warning">
							En Python, on remplace la virgule par un point !
						</p>
						<div class="exercice">
							<p>
								Teste ce petit programme :
							</p>
							<div class="code-box">
								<pre>
a = 1.5
b = 7 / 2

print(a)
print(b)
								</pre>
							</div>
						</div>
					</div>
			</div>

			<div class="row white-box">
				<div class="col-12">
					<h1>L'aléatoire avec <code>random</code></h1>
          <p>
            Random veut dire aléatoire en anglais.
          </p>
          <p>
            Ce module permet de faire faire à l'ordinateur des actions nécessitant du hasard.
          </p>
          <p>
            On utilise souvent des fonctions pratiques dans nos programmes, ça permet de gagner du temps:
          </p>
          <p>
            La fonction <code>rnd.randint(min, max)</code> retourne un entier aléatoirement entre <code>min</code> inclus et <code>max</code> inclus
          </p>
					<div class="exercice">
          <p>Testes le code suivant:</p>
    				<div class="code-box">
							<pre>
import random as rnd

minimum = 1
maximum = 6

nombre = rnd.randint(minimum, maximum)

print("Le nombre est {}".format(nombre))

if nombre <= 3 :
  print("En dessous ou égal à 3")
elif nombre == 4 :
  print("Egal à 4")
else :
	print("Au dessus ou égal à 5")
							</pre>
						</div>
          <p>
            Que se passe-t-il si tu l'exécutes plusieurs fois ?
          </p>
					</div>
          <p>
            La fonction <code>rnd.choice(liste)</code> retourne un élément aléatoire de la liste!
          </p>
          <p class="warning">
  						<code>liste</code> ne doit pas être vide! C'est à dire que: <code>liste != []</code>
					</p>
  				<div class="exercice">
          <p>Testes le code suivant:</p>
    				<div class="code-box">
							<pre>
import random as rnd

endroits_cools = ["Vénus", "ma maison", "Mars", "le kébab au bout", "Saturne", "Uranus" ,"Châtelet-les Halles"] <!--pas de tiret à "les Halles"!-->

endroit = rnd.choice(endroits_cools)

print("J'ai été téléporté(e) ici : {}; TROOOOP COOL!!".format(endroit))
							</pre>
						</div>
          <p>
            Que permet-il de faire? Puis-je être téléporté sur la gare de Pau avec ce code?
          </p>
					</div>

          <p>
            Les fonctions de ce module te serviront et t'accompagneront tout le temps lorsque tu fais un jeu.
						Elles te permettent de donner un peu d'inattendu au joueur et de le surprendre même lorsqu'il rejouera!
          </p>
				</div>
			</div>
			
  		<div class="row white-box">
				<div class="col-12">
					<h1>La boucle <code>while</code></h1>
					<p>
						La boucle <code>while</code> permet de répéter du code <strong>tant que</strong> une certaine condition est vraie.
					</p>
          <div class="exercice">
  					<div class="code-box">
							<pre>
import random as rnd

continuer = True

while continuer :
  nombre = rnd.randint(1, 1000)
	print(nombre)
	if nombre < 5 :
		continuer = False
							</pre>
						</div>
					</div>
				</div>
			</div>

			<div class="row white-box">
					<div class="col-12">
						<h1>Les commentaires</h1>
						<p>
							On peut rajouter des commentaires, c'est à dire du texte que Python ignore de 2 façons :
						</p>
						<div class="example">
							<div class="code-box">
								<pre>
# Avec un hashtag (Alt Gr + 3)

"""
Ou avec 3 guillemets les uns à la suite des autres
Tout ce qui est entre est ignoré par Python
"""
								</pre>
							</div>
						</div>
					</div>
        </div>
				<div class="row white-box">
						<div class="col-12">
							<h1>Les assertions</h1>
							<p>
								Les assertions permettent de renvoyer une erreur personnalisée si une condition est vérifiée.
							</p>
							<div class="exercice">
								<p>
									Teste le code suivant :
								</p>
								<div class="code-box">
									<pre>
diviseurs = [3, 4, 5, 0, 2]

for diviseur in diviseurs :
		assert diviseur != 0, "Le diviseur ne peut pas être zéro"
		print(120 / diviseur)				

									</pre>
								</div>
							</div>
						</div>
					</div>

					<div class="row white-box">
							<div class="col-12">
								<h1>Course de tortues</h1>
								<div class="exercice">
									<p>
										Télécharge ce <a href="<?= code_url("seance3/turtle_race");?>" download="course_tortues_squelette.py">fichier Python <i class="fa fa-download" aria-hidden="true"></i></a>.
									</p>
									<p>
										La classe <code>Tortue</code> possède une position stockée en tuple (x,y), un entier qui représente sa vitesse et une trt.Turtle() représentant le coureur.
									</p>
									<p>
										Quand on crée une Tortue, on choisit sa couleur avec l'argument passé dans le constructeur <code>__init__</code>. On positionne la tortue à son départ avec la méthode <code>SePositionner</code>.
									</p>
									<p>
										La méthode <code>Avancer</code> met à jour la position du coureur et utilise la méthode forward de la tortue, elle avance de sa vitesse.
									</p>
									<p>
										La classe <code>Course</code> possède un nombre de coureurs. Elle vérifie avec des assert que le nombre est compris entre 1 et 6.
									</p>
									<p>
										La méthode <code>ToutesLesPositions</code> renvoit la liste des positions de départs selon le nombre de coureurs.
									</p>
									<p>
										La méthode <code>InitialiserTortues</code> crée autant de coureurs que nécessaires. Avec une vitesse aléatoire comprise entre 2 et 30. 
										Et une couleur aléatoirement choisie parmi <code>self.couleurs</code>.
									</p>
									<p>
										La méthode <code>PasDeGagnants</code> renvoit False si une des tortues a dépassé la ligne d'arrivée.
									</p>
									<p>
										La méthode <code>ContinuerCourse</code> appelle la méthode <code>Avancer</code> de toutes les tortues.
									</p>
									<p>
										La méthode <code>TrouverPerdantEtGagnant</code> renvoit le perdant et la gagnant de la course.
									</p>
									<p>
										La méthode <code>AfficherResultats</code> affiche qui a perdu et qui a gagné.
									</p>
									<p>
										La méthode <code>Lancer</code> lance la course, elle continue tant qu'il n'y a pas de gagnant.
									</p>
									<p>
										Remplace les <code>???</code> dans le fichier.
									</p>
								</div>
							</div>
					</div>

			<div class="row white-box">
					<div class="col-12">
						<h1>Le gobelin de la mine</h1>
						<div class="exercice">
							<p>
								Télécharge ce <a href="<?= code_url("seance3/gobelin");?>" download="gobelin_squelette.py">fichier Python <i class="fa fa-download" aria-hidden="true"></i></a>.
							</p>
							<p>
								Le gobelin possède une mine, une forge et une taverne. Tous les jours il travaille dans les 3 établissements.
							</p>
							<p>
								La mine lui rapporte 10 sous, la forge 50 et la taverne 20.
							</p>
							<p>
								Il veut gagner 1000 pièce d'or.
							</p>
							<p>
								Pour cela, tant qu'il n'a pas atteint son objectif, il travaille.
							</p>
							<p>
									La méthode <code>TotalTresorerie</code> renvoit la somme des pièces d'or de la mine, de la forge et de la taverne du gobelin.
							</p>
							<p>
								La méthode <code>ObjectifAtteint</code> renvoit True si la trésorerie du gobelin dépasse son objectif.
							</p>
							
							<p>
								Remplace les <code>???</code> dans le fichier.
							</p>
						</div>
					</div>
			</div>
<div class="row white-box">
					<div class="col-12">
					<h1>Une liste de courses</h1>
					<div class="exercice">
          	<p>
								Télécharge ce <a href="<?= code_url("seance3/panier");?>" download="panier_squelette.py">fichier Python <i class="fa fa-download" aria-hidden="true"></i></a>.
						</p>
						<p>
							Complète la fonction <code>magasiner(magasin, courses)</code>
							afin qu'elle <i>retourne</i> la liste des produits figurant 
							sur la liste <code>courses</code> 
							qui sont présents parmi les <code>produits</code> 
							du <code>magasin</code>. 
            	Utilises la boucle <code>for</code>!
						</p>
            <p>
              Peux-tu utiliser la boucle <code>for</code> autrement?
            </p>
					</div>
					</div>
					</div>
			<div class="row white-box">
					<div class="col-12">
						<h1>Le héro et les monstres</h1>
						<p class="warning">
							Cet exercice est assez difficile !
						</p>
						<div class="exercice">
							<p>
								Télécharge ce <a href="<?= code_url("seance3/minirpg");?>" download="heros_et_monstres_squelette.py">fichier Python <i class="fa fa-download" aria-hidden="true"></i></a>.
							</p>
							<p>
								Le monstre et le joueurs possèdent des points de vie (PV) et d'attaque (ATK).
							</p>
							<p>
								La méthode <code>EstVivant</code> renvoit True si les PV sont plus grands que 0.
							</p>
							<p>
								La méthode <code>AttaquerJoueur(joueur)</code> prend le joueur en argument, et appelle sa méthode <code>PrendreDegats</code> en utilisant l'ATK du monstre.
							</p>
							<p>
								La méthode <code>PrendreDegats</code> du <strong>monstre</strong> lui retire autant de PV que l'argument ATK. Elle affiche aussi les PV restants du monstre.
							</p>
							<p>
									La méthode <code>AttaquerMonstre(monstre)</code> prend un joueur en argument, et appelle sa méthode <code>PrendreDegats</code> en utilisant l'ATK du joueur.
							</p>
							<p>
								La méthode <code>ParadeReussie</code> calcule un entier aléatoire entre 1 et 6 et renvoit True si le nombre est plus petit que 2.
							</p>
							<p>
									La méthode <code>PrendreDegats</code> du <strong>joueur</strong> vérifie si la parade est réussie, si oui elle affiche "Le joueur a paré"
									sinon elle lui retire autant de PV que l'argument ATK. Elle affiche aussi ses PV restants.
							</p>
							<p>
								La classe <code>Jeu</code> crée un joueur dont les PV sont pris aléatoirement entre 50 et 200 et l'ATK entre 5, 20.
							</p>
							<p>
								Elle crée aussi entre 5 et 20 monstres dont les PV sont entre 10 et 30 et l'ATK entre 5 et 20.
							</p>
							<p>
								La méthode <code>IlResteDesMonstres</code> renvoit True si la taille de la liste self.monstres et plus grande que 0.
							</p>
							<p>
								La méthode <code>MonstreSuivant</code> affiche combien de monstres il reste. Puis retire un monstre de la liste. Puis elle le renvoit.
							</p>
							<p>
								La méthode <code>Jouer</code> est commentée directement dans le fichier.
							</p>
							<p>
								Remplace les <code>???</code> dans le fichier.
							</p>
						</div>
					</div>
			</div>
		</div>
	</div>
</main>
