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
          Ecris ce code et teste le avec Pyzo:
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
def CreerRecette(nombreOeufs, ..., poidsBeurre):
		recette = "Cassez {} oeufs, mélangez-les avec {} grammes de farine et {} grammes de beurre".format(..., poidsFarine, ...)
		... recette

recette_traditionnelle = CreerRecette(3, 200, 50)
print(recette_traditionnelle)

recette_grasse = CreerRecette(3, 200, 200)
print(...)
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
						<div class="code-box">
							<pre>
liste_de_courses = ["fromage", "gateaux", "fraises", "croissant", "papier wc", "vase", "pain"]
							</pre>
						</div>
					</div>
          <p>
            Celle-ci peut contenir tout ce que l'on veut:
					</p>
					<ul>
						<li>Des chaines de caractères</li>
            <li>Des nombres</li>
            <li>Des instances de classes</li>
            <li>Et tout ce qui est une objet Python en général</li>
					</ul>
          <p>
            
          </p>
					<div class="exercice">
					</div>
			</div>
		</div>
		<div class="row white-box">
			<div class="col-12">
					<h1>Listes et indices</h1>
          <p class="warning">
  						L'indices i doit être inférieur à la longueur de la liste !
					</p>
  				<div class="example">
						<div class="code-box">
							<pre>
"""code python"""
							</pre>
						</div>
					</div>
					<div class="exercice">
					</div>
				</div>
			</div>
			<div class="row white-box">
				<div class="col-12">
          <h1>Listes et boucle <code>for</code></h1>
          <div class="example">
						<div class="code-box">
							<pre>
"""code python"""
							</pre>
						</div>
					</div>
					<div class="exercice">
					</div>
				</div>
			</div>
			<div class="row white-box">
				<div class="col-12">
          <h1>Listes et fonctions usuelles</h1>
          <div class="example">
  					<div class="code-box">
							<pre>
"""code python"""
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
          <div class="exercice">
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
					<div class="example">
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
					</div>
					<div class="exercice">
							<p>
								Ecris ce code avec Pyzo et complete-le (remplace les ...) pour que la fonction <code>impots(argent)</code> retourne 
								l'argent qu'il reste après la collecte des impôts et l'argent qui a été collecté
							</p>
								<div class="code-box">
									<pre>
def impots(argent):
	taxe_pourcent = 33

	collecte = argent * (taxe_pourcent / 100)
	
	il_reste_ca = argent - ...
	
	return ..., collecte


il_reste_ca, ... = impots(1000)	
print("il me reste {} €! {}€ ont été pris.".format(..., ...))
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
            La fonction <code>rnd.random()</code> retourne un nombre flottant aléatoirement choisi entre 0.0 inclus et 1.0 exclu. <br>
            Tout le module a été construit autour de ce que cette fonction permet!
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
            On utilise souvent d'autres fonctions plus pratiques dans nos programmes tout de même, ça permet de gagner du temps:
          </p>
          <p>
            La fonction <code>rnd.randint(min, max)</code> retourne un entier aléatoirement entre <code>min</code> inclus et <code>max</code> inclus
          </p>
					<div class="exercice">
          <p>Teste le code suivant:</p>
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
          <p>Teste le code suivant:</p>
    				<div class="code-box">
							<pre>
import random as rnd

endroits_cools = ["Vénus", "ma maison", "Mars", "le kébab au bout", "Saturne", "Uranus" ,"Châtelet-les-Halles"]

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
						<h1>Le gobelin de la mine</h1>
						<div class="exercice">
							<p>
								Télécharge ce <a href="<?= code_url("seance3/gobelin");?>" download="gobelin_squelette.py">fichier Python <i class="fa fa-download" aria-hidden="true"></i></a>.
							</p>
							<p>
								Le gobelin possèe une mine, une forge et une taverne. Tous les jours il travaille dans les 3 établissements.
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
									La méthode TotalTresorerie renvoit la somme des pièces d'or de la mine, de la forge et de la taverne du gobelin.
							</p>
							<p>
								La méthode ObjectifAtteint renvoit True si la trésorerie du gobelin dépasse son objectif.
							</p>
							
							<p>
								Remplace les <code>...</code> et <code>???</code> dans le fichier.
							</p>
						</div>
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
</main>
