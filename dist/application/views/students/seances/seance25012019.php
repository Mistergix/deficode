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
liste_ports = [8080, 943]
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
cool_zones = ["Dupanloup", "la boulangerie", "Châtelet-les Halles", "Sceaux", "la maison"]
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
  					<div class="code-box">
							<pre>
panier = []
liste_de_course = ["fromage", "gateaux", "fraises", "croissant", "papier wc", "vase", "pain"]

liste_de_course = liste_de_course + ["pizza", "cornichons"] + ["pommes"]


class Boulangerie:
    def __init__(self):
        self.produits = ["croissant", "pain", "chocolatine", "gateaux"]
        
class Epicerie:
    def __init__(self):
        self.produits = ["cornichons", "fromage", "papier wc", "pommes", "fraises", "pizza"]
    
class GarsChelou:
    def __init__(self):
        self.produits = ["vase"]
        
def magasiner(magasin, courses):
#    print("j'achète des trucs chez: ", magasin)
    panier = []
    for produit in magasin.produits:
        if produit in courses:
            panier.append(produit)
    return panier
        
panier_boulangerie = magasiner(Boulangerie(), liste_de_course)
panier_epicerie    = magasiner(Epicerie()   , liste_de_course)
panier_ruelle      = magasiner(GarsChelou() , liste_de_course)

panier = panier_boulangerie + panier_epicerie + panier_ruelle

print("j''ai acheté:", panier)
							</pre>
						</div>
					</div>
          <h2>Listes et fonctions usuelles</h2>
          <div class="example">
  					<div class="code-box">
							<pre>
print("Initialisation")
systeme_solaire = ["Vénus", "Tere", "Mars", "Jupiter", "Saturne", "Uranus", "Pluton"] # penser à préciser qu'on peut initialiser une liste vide
print(systeme_solaire)

print("Ajout de Neptune")
systeme_solaire.append("Neptune")
print(systeme_solaire)

print("Retrait de Pluton")
systeme_solaire.remove("Pluton")
print(systeme_solaire)

print("Insertion de Mercure")
systeme_solaire.insert(0, "Mercure")
print(systeme_solaire)

print("Correction de Terre")
systeme_solaire[2] = "Terre"
print(systeme_solaire)

print("Il y a {} planètes dans le système solaire".format(len(systeme_solaire)))

for planete in systeme_solaire:
  print(planete)

dernier_indice = len(systeme_solaire) - 1
derniere_planete = systeme_solaire[dernier_indice]
print("La dernière planète du système solaire est {}".format(derniere_planete))

print("Le système solaire sans la première et la dernière planète")
print(systeme_solaire[1 : dernier_indice])
							</pre>
						</div>
					</div>
					<div class="exercice">
					</div>
				</div>
			</div>
			
			<div class="row white-box">
				<div class="col-12">
					<h1>Les tuples <code>tuple</code></h1>
          <div class="example">
  					<div class="code-box">
            
							<pre>
# https://www.rapidtables.com/web/color/RGB_Color.html

COULEUR = (..., ..., ...)

rouge, vert, bleu = COULEUR

print("Dans ma couleur :")
print("Le rouge est présent à {} %".format(rouge /255 * 100))
print("Le vert est présent à {} %".format(vert /255 * 100))
print("Le bleu est présent à {} %".format(bleu /255 * 100))
							</pre>
						</div>
					</div>
        <div class="exercice">
      		<div class="code-box">
						<pre>
class Chocolatine:
    def __init__(self):
        print("je suis mangé!")
    
    def nom(self):
        return "CH0C0LA71N3 !!!!!"


cadeau = (Chocolatine(), "Nicolas", "Julian")

#déplier un tuple
objet, destinataire, expediteur = cadeau

#afficher un tuple
print(cadeau)

#fonction qui mange un objet de type: tuple(objet, destinataire, expediteur)
def offrir( truc ):
    liste_des_trucs_offert = []
    
    objet, destinataire, expediteur = truc
    print("-> {} offre {} à {}. Le voici dans le return:".format(expediteur, objet.nom(), destinataire))
    
    return objet

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
          <div class="example">
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
					<div class="exercice">
          
    				<div class="code-box">
							<pre>
class Mine :
  def __init__(self):
		self.tresorerie = 0

	def Travailler(self):
		self.tresorerie += 10

class Forge :
	def __init__(self):
		self.tresorerie = 0

	def Travailler(self):
		self.tresorerie += 50

class Taverne :
	def __init__(self):
		self.tresorerie = 0

	def Travailler(self):
		self.tresorerie += 20

class Gobelin:
	def __init__(self):
		self.mine = Mine()
		self.forge = Forge()
		self.taverne = Taverne()

		self.objectif = 1000

		print("Le gobelin veut {} pièces d'or".format(self.objectif))

	def Travailler(self):
		self.mine.Travailler()
		self.forge.Travailler()
		self.taverne.Travailler()
		print("La trésorerie du gobelin est de {} pièces d'or".format(self.TotalTresorerie()))

	def ObjectifAtteint(self):
		return self.TotalTresorerie() >= self.objectif

	def TotalTresorerie(self):
		return self.mine.tresorerie + self.forge.tresorerie + self.taverne.tresorerie

gobelin = Gobelin()

while not gobelin.ObjectifAtteint() :
	gobelin.Travailler()

print("Le gobelin a atteint son objectif !")
							</pre>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row white-box">
				<div class="col-12">
          <h1>Du héros et des monstres...</h1>
					<p class="example">
						mon_programme.py
					</p>
					<div class="exercice">
						<p>
							Ouvre <?= $editor; ?>.
						</p>
						<p>
							Crée un fichier <span class="file">turtle_introdution.py</span>.
						</p>
						<p>
							Tape le code suivant et exécute-le :
						</p>
						<div class="code-box">
							<pre>
import random as rnd

class Monstre:
  def __init__(self, PV, ATK):
		self.PV = PV
		self.ATK = ATK
		self.AfficherEtat()

	def EstVivant(self):
		return self.PV > 0

	def AttaquerJoueur(self, joueur):
		joueur.PrendreDegats(self.ATK)

	def PrendreDegats(self, ATK):
		self.PV -= ATK
		print("Il reste {} PV au monstre".format(self.PV))

	def AfficherEtat(self):
		print("Le monstre a {} PV et {} ATK".format(self.PV, self.ATK))

class Joueur:
	def __init__(self, PV, ATK):
		self.PV = PV
		self.ATK = ATK
		self.AfficherEtat()

	def EstVivant(self):
		return self.PV > 0

	def AttaquerMonstre(self, monstre):
		monstre.PrendreDegats(self.ATK)

	def ParadeReussie(self):
		entier = rnd.randint(1,6)
		if entier <= 2 :
			return True
		else :
			return False  # expliquer qu'on peut directement écrire return entier <= 2

	def PrendreDegats(self, ATK):
		if self.ParadeReussie() :
			print("Le joueur a paré")
		else :
			self.PV -= ATK
			print("Il reste {} PV au joueur".format(self.PV))

	def AfficherEtat(self):
		print("Le joueur a {} PV et {} ATK".format(self.PV, self.ATK))

class Jeu:
	def __init__(self):
		pv_joueur = self.NombreAleatoireDansIntervalle((50, 200))
		atk_joueur = self.NombreAleatoireDansIntervalle((5, 20))
		self.joueur = Joueur(pv_joueur, atk_joueur)

		nombre_monstres = self.NombreAleatoireDansIntervalle((5, 20))
		self.monstres = []

		for compteur in range(nombre_monstres):
			pv = self.NombreAleatoireDansIntervalle((10, 30))
			atk = self.NombreAleatoireDansIntervalle((5, 20))
			monstre = Monstre(pv, atk)

			self.monstres.append(monstre)

		print()

	def NombreAleatoireDansIntervalle(self, intervalle):
		minimum, maximum = intervalle
		nombre = rnd.randint(minimum, maximum)
		return nombre

	def IlResteDesMonstres(self):
		return len(self.monstres) > 0

	def MonstreSuivant(self):
		print("Il reste {} monstres".format(len(self.monstres)))
		monstre = self.monstres.pop()

		monstre.AfficherEtat()

		return monstre

	def Jouer(self):
		monstre = self.MonstreSuivant()
		while self.joueur.EstVivant() and self.IlResteDesMonstres() and monstre.EstVivant():
			self.joueur.AttaquerMonstre(monstre)

			if monstre.EstVivant() :
				monstre.AttaquerJoueur(self.joueur)
			else :
				print("Le monstre est mort")
				print()
				monstre = self.MonstreSuivant()

		if self.joueur.EstVivant():
			print("Le joueur a gagné !")
			self.joueur.AfficherEtat()
		else :
			print("Les monstres ont gagné ...")

		
jeu = Jeu()

jeu.Jouer()
							</pre>
						</div>
						<p>
							 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>