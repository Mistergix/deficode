<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
  <div class="container">
	
		<div class="row white-box">
			<div class="col-12">
				<h1>Le retour des fonctions: mot clef <code>return</code></h1>
        <p>
          Le mot clef <code>return</code> est la dernière instruction qui doit être exécutée par une fonction.<br>
          Une fois le <code>return</code> franchi, Python quitte la fonction.'
        </p>
        <p>
          Il n'est pas obligatoire en fin de fonction.
        </p>
        <div class="exercice">
        <p>
          Ecris ce code et testes le avec <?= $editor; ?>:
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
          Il sert aussi à faire remonter des informations à celui qui a exécuter la fonction,<wbr>
          cela se produit lorsque l'on ajoutes variables ou des objets Python après <code>return</code>.
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
        <br>
        <p>
          Mais on peut aussi retourner plusieurs trucs à la fois:
        </p>
  				<div class="code-box">
						<pre>
def f():
  a = 1
  b = True
  c = "pratique"
  
  return a, b, c
  
nb, test, chaine = f()
print(nb, test, chaine)
						</pre>
					</div>
          <p>
            On t'invite à tester ces deux examples pour t'en convaincre !
          </p>
				</div>
        <p>
          De façon plus réelle, on peut s'en servir comme ça:
        </p>
				<div class="exercice">
        <p>
          Ecris ce code avec <?= $editor; ?> et completes-le (sur les ...) pour que la fonction <code>impots(argent)</code> retourne <wbr>
          l'argent qu'il reste après la collecte des impots et l'argent qui a été collecté
        </p>
  				<div class="code-box">
						<pre>
def impots(argent):
  taxe_pourcent = 33
  
  il_reste_ca = argent - argent * (taxe_pourcent / 100)
  
  return ...
  
... = impots(1000)
  
print("il me reste {} €! {}€ ont été pris.".format(...))
						</pre>
					</div>
				</div>
        
      </div>
		</div>
    
		<div class="row  white-box">
				<div class="col-12">
					<h1>Les listes <code>list</code></h1>
					<p>
						On a vu que l'on peut stocker des informations dans des variables.
					</p>
          <p>
            Mais que faire si l'on veut écrire les courses de la semaine en Python? <br>
            Une variable par chose à acheter? ça deviendrait ingérable rapidement.
          </p>
          <p>
            Python nous propose la même solution que dans la vraire vie: LA LISTE
          </p>
					<div class="example">
          <p>
            On peut créer des liste déjà remplies:
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
              Toi aussi essaies de créer une liste!
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
            <ul>
            <li>Des chaines de caractères</li>
            <li>Des nombres</li>
            <li>Des instances de classes</li>
            <li>Et tout ce qui est une objet python en général</li>
            </ul>
          </p>
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
              Ici, le 5e élément de<code>tas</code> est une liste, <wbr>
              le 2e élément de <code>tas</code> est une classe, et <wbr>
              le 6e élément de <code>tas</code> est une fonction.
            </p>
					</div>
          <p>
            Les listes peuvent aussi être collées les unes à la suite des autres une, une plusieurs fois avec les opérateurs + et * :
          </p>
      		<div class="exercice">
            <p>
              Testes ça!
            </p>
            <div class="code-box">
						  <pre>
objets_perdus = ["crayon HB"] + ["feutre", "cartable"] * 2 + ["le futur de mon frère"]
print(objets_perdus)
						  </pre>
					  </div>
            <p>
              Essaies d'ajouter des éléments et de voir ce que ça donne!
            </p>
          </div>
          <p>
            Les listes, c'est encore meileur quand on les utilise pour y faire ranger des informations non pas par nous <wbr>
            mais pas notre programme Python directement:
          </p>
					<h2>Listes et indices</h2>
          <p>
            On peut acceder à chaque élément de la liste avec ce que l'on appelle son <b>indice</b>. <br>
            Il s'agit en fait de sa position dans la liste...
          </p>
          <p class="warning">
    					En python, le premier élément est d'indice 0
          </p>
    			<div class="exercice">
              <div class="code-box">
							  <pre>
l = [13, 4, 7]
print(l[0], l[1])
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
l = [13, 4, 7]
print(l[3])
							</pre>
						</div>
            <p>
              Ce code génère une erreur... car la liste ne comptient que 3 élément.
            </p>
            <p>
              L'indice max de cette liste <code>l</code> est en effet <code>2</code> !
            </p>
					</div>
					<div class="exercice">
            <p>
              Reprenons l'exemple d'avant maintenant qu'on le comprends, essayons d'extraire ce qui nous intéresse de la liste!
            </p>
            <p>
              Recopies le code suivant sur <?= $editor; ?>
            </p>
						<div class="code-box">
							<pre>
def f():
  print("je suis f")
  
class Chien:
  def __init__(self):
    print("wouf")
              
tas = ["camembert", Chien, 42, True, [0, "cocotier"], f, "pain"]
tas[...]()
tas[...]()
print(tas[...])
							</pre>
						</div>
            <p>
              Completes sur les pointilés ce qui précède,<wbr> et esssaies d'obtenir l'affichage suivant sur ta console <?= $editor; ?>:
            </p>
  					<div class="code-box">
							<pre>
wouf
je suis f
[0, 'cocotier']
  						</pre>
						</div>
            <p class="warning">
              Si tu obiens l'erreur <i><code>TypeError: 'str' object is not callable</code></i><wbr>
              C'est que tu t'es trompé d'indice!
            </p>
					</div>
          
          <h2>Listes et boucle <code>for</code></h2>
          <p>
            L'accès par indice est très utile pour parcourir une liste avec une boucle <code>for</code>
          </p>
        	<div class="exercice">
            <p>
              Essaies ça avec <?= $editor; ?> !
            </p>
              <div class="code-box">
							  <pre>
liste_ports = [80, 8080, 943, 22]
for i in range(2):
  print("virus {} envoyé sur le port {}!".format(i, liste_ports[i]))
							  </pre>
						  </div>
              <p>
                Quel est l'affichage produit par ce bout de code?<br>
                Pourquoi avoir mis <code>range(2)</code>?
              </p>
          </div>
          <p>
            Python propose aussi un raccourcis lorsque l'on a besoin uniquement de la valeur sans l'indice.
          </p>
          <div class="example">
						<div class="code-box">
							<pre>
cool_zones = ["Dupanloup", "la maison", "la boulangerie", "Châtelet-les Halles", "Charleroi" ]
for endroit in cool_zones:
  print("Je suis allé à {}!".format(endroit))
							</pre>
						</div>
            <p>
              <code>endroit</code> est un élément de la liste <code>cool_zones</code>. <wbr>
              Y assigner des choses ne change pas la liste originale.<wbr>
              C'est à dire que écrire <code>endroit = 5</code> ne sert à rien.
            </p>
					</div>
					<div class="exercice">
          <p>
            Saisis-toi de <?= $editor; ?> et tapes le code suivant!
            Completes la fonction <code>magasiner(magasin, courses)</code>
            afin qu'elle <i>retourne</i> la liste des produits figurant 
            sur la liste <code>course</code> 
            qui sont présent parmis les <code>produits</code> 
            du <code>magasin</code>.
          </p>
          <p>
            Utilises la boucle <code>for</code>!
          </p>
  					<div class="code-box">
							<pre>
panier = []
liste_de_course = ["croissant", "vase", "pain"]

liste_de_course = liste_de_course + ["pizza", "cornichons"]


class Boulangerie:
    def __init__(self):
        self.produits = ["croissant", "pain"]
        
class Epicerie:
    def __init__(self):
        self.produits = ["cornichons", "pizza"]
    
class MarchandTapis:
    def __init__(self):
        self.produits = ["vase"]
        
def magasiner(magasin, courses):
    ...
        
panier_boulangerie = magasiner(Boulangerie(), liste_de_course)
panier_epicerie    = magasiner(Epicerie(), liste_de_course)
panier_ruelle      = magasiner(MarchandTapis(), liste_de_course)

panier = panier_boulangerie + panier_epicerie + panier_ruelle

print("j''ai acheté:", panier)
							</pre>
						</div>
            <p>
              Quelle est le type du premier paramètre de la fonction <code>magasiner</code>?<br>
              Pouvais-tu utiliser la boucle <code>for</code> autrement?
            </p>
					</div>
          <p>
            Allons maintenant nous munir de fonction pour manipuler les listes
          </p>
          <h2>Listes et fonctions usuelles</h2>
          <div class="exercice">
            <p>
              Completes ton fichier python tout au long de l'exercice!
            </p>
            <p>
              On commence d'abord par créer notre liste, comme précédemment
            </p>
  					<div class="code-box">
							<pre>
print("Initialisation")
systeme_solaire = ["Vénus", "Tere", "Mars", "Jupiter", "Saturne", "Uranus", "Pluton"]
print(systeme_solaire)
  						</pre>
						</div>
            <p>
              <code>systeme_solaire<b>.append(x)</b></code> permet d'ajouter un nouvel élément 
              <code>x</code> à la fin de la liste
            </p>
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
              <code>systeme_solaire<b>.remove(x)</b></code> permet de retirer le premier élément nommé
              <code>x</code> de la liste
            </p>
            <p>
              Retires Pluton de la lsite des planetes!
            </p>
    				<div class="code-box">
							<pre>
print("Retrait de Pluton")
...
print(systeme_solaire)
  						</pre>
						</div>
            <p>
              <code>systeme_solaire<b>.insert(i, x)</b></code> permet d'ajouter un nouvel élément 
              <code>x</code> à la position <code>i</code> dans la liste.<br>
              L'élément qui était alors en <code>i</code> se retrouve en <code>i+1</code><br>
            </p>
            <p>
              Inseres Mercure en tête de liste! (indice 0)
            </p>
    				<div class="code-box">
							<pre>
print("Insertion de Mercure")
...
print(systeme_solaire)
  						</pre>
						</div>
            <p>
              <code>systeme_solaire<b>[i]</b></code> permet donc d'obetnir ou de modifier la valeur de l'élément
              <code>i</code> de la liste
            </p>
            <p>
              Corriges la faute d'orthographe à "Tere"!
            </p>
    				<div class="code-box">
							<pre>
print("Correction de Terre")
...
print(systeme_solaire)
  						</pre>
						</div>
            <p>
              <code><b>len(l)</b></code> permet d'obetnir le nombre d'éléments de la liste
            </p>
            <p>
              Affiches le nombre de planètes!
            </p>
    				<div class="code-box">
							<pre>
print(...)
  						</pre>
						</div>
            <p>
              <code><b>len(l) - 1</b></code> est donc le dernier indice de la liste
            </p>
            <p>
              Affiches le nom de la dernière planète de la liste!
            </p>
    				<div class="code-box">
							<pre>
dernier_indice = ...
derniere_planete = ...
print(...)
  						</pre>
						</div>
            <p>
              <code><b>l[i : j]</b></code> permet de tronquer la liste en ne gardant que les éléments de
              <code>l[i]</code> à <code>l[j-1]</code>
            </p>
            <p>
              Affiches le nombre de planètes!
            </p>
    				<div class="code-box">
							<pre>
print("Le système solaire sans la première et la dernière planète")
print(systeme_solaire[...])
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
          <div class="exercice">
            <p>
              Le tuple est ici composé de 3 éléments désignant la position d'un avion
            </p>
    				<div class="code-box">
							<pre>
position = (11.0, 1100.2, 45.2)
print("hauteur de l'avion: {}".format(position[1]))
						  </pre>
					  </div>
            <p>
              On souhaite faire descendre l'avion de 1.0 mètre.
            </p>
      			<p class="warning">
        		 <code>position[1] = position[1] - 1</code> est illégal
      			</p>
            <p>
              Pour modifier une valeur dans un tuple, 
              on est donc obligé de refaire un nouveau tuple:
            </p>
      			<div class="code-box">
							<pre>
position = (position[0], position[1] - 1, position[2])
print(position)
						  </pre>
					  </div>
				  </div>
          <p>
            A ton tour de fabriquer un tuple et de découvrir une autre propriété: <b>la décomposition</b>
          </p>
          <div class="exercice">
            <p>
              Vas sur <a href="https://www.rapidtables.com/web/color/RGB_Color.html">ce site</a>,
              choisis une couleur, puis reporte les valeurs R, G et B dans les champs
              en pointillé:
            </p>
  					<div class="code-box">
							<pre>
COULEUR = (..., ..., ...)

rouge, vert, bleu = COULEUR

print("Dans ma couleur :")
print("Le rouge est présent à {} %".format(rouge /255 * 100))
print("Le vert est présent à {} %".format(vert /255 * 100))
print("Le bleu est présent à {} %".format(bleu /255 * 100))
						</pre>
					</div>
					<div class="exercice">
							<p>
								Ecris ce code avec Pyzo et complete-le (remplace les ???) pour que la fonction <code>impots(argent)</code> retourne 
								l'argent qu'il reste après la collecte des impôts et l'argent qui a été collecté.
							</p>
								<div class="code-box">
									<pre>
def impots(argent):
	taxe_pourcent = 33

	collecte = argent * (taxe_pourcent / 100)
	
	il_reste_ca = argent - ???
	
	return ???, collecte


il_reste_ca, ??? = impots(1000)	
print("il me reste {} €! {}€ ont été pris.".format(???, ???))
									</pre>
								</div>
							</div>
          <p>
            Sur la 2e ligne, on remarque qu'il y a 3 variables à gauche du <code>=</code> au lieu d'une! Il s'agit
            de la <b>décomposition</b>. Il doit y avoir <b>autant de variables à gauche que d'élément dans le tuple</b> ou
            la liste pour que cela fonctionne.
          </p>
				</div>
        <div class="exercice">
        <p>
          Modifies la fonction <code>offrir</code> pour qu'elle retourne le nom de l'objet offert et
          affiche qui en est le destinataire!
        </p>
      		<div class="code-box">
						<pre>
class Nonos:
    def __init__(self):
        print("je suis mangé!")

def offrir( truc ):
    ...

cadeau = (Nonos(), "Nicolas", "Médor")
truc_pour_untel = offrir(cadeau)
print(truc_pour_untel)
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
            La fonction <code>rnd.random()</code> retourne un nombre à virgule aléatoirement choisi entre 0.0 inclus et 1.0 exclu. <br>
            Le module entier a été construit autour de ce que cette fonction permet!
          </p>
          <div class="example">
  					<div class="code-box">
							<pre>
import random as rnd

nombre = rnd.random()

print("Le nombre est {}".format(nombre))
							</pre>
						</div>
					</div>
          <p>
            On utilise souvent d'autres fonctons plus concrètes dans nos programmes tout de même; ça permet de gagner du temps:
          </p>
          <p>
            La fonction <code>rnd.randint(min, max)</code> retourne un entier aléatoirement entre <code>min</code> inclus et <code>max</code> exclu
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
            Que permet-il de faire?
          </p>
					</div>
				</div>
          <p>
            La fonction <code>rnd.choice(liste)</code> retourne un élément aléatoir de la liste!
          </p>
          <p class="warning">
  						<code>liste</code> ne doit pas être vide! C'est à dire que: <code>liste != []</code>
					</p>
  				<div class="exercice">
          <p>Testes le code suivant:</p>
    				<div class="code-box">
							<pre>
import random as rnd

endroits_cools = ["Vénus", "ma maison", "Mars", "le kébab au bout", "Saturne", "Uranus" ,"Châtelet-les Halles"]

endroit = rnd.choice(endroits_cools)

print("J'ai été téléporté sur {}; TROOOOP COOL!!".format(endroit))
							</pre>
						</div>
          <p>
            Que permet-il de faire? Puis-je être téléporté sur la gare de Pau avec ce code?
          </p>
					</div>

          <p>
            Les fonctions de ce module te serviront et <wbr>t'accompagneront tout le temps lorsque tu fais un jeu<br>
            Elles te permettent de donner un peu d'innatendu au joueur <wbr>et de le surprendre même lorsqu'il rejouera!
          </p>
				</div>
			</div>
			
  		<div class="row white-box">
				<div class="col-12">
					<h1>La boucle <code>while</code></h1>
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
