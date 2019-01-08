import random as rnd
#exercice final

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
