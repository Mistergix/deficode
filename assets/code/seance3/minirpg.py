import random as rnd

class Monstre:
	def __init__(self, ???, ATK):
		self.PV = ???
		self.??? = ATK
		self.AfficherEtat()

	def EstVivant(self):
		return ??? > ???

	def AttaquerJoueur(self, ???):
		joueur.PrendreDegats(???)

	def PrendreDegats(self, ATK):
		self.PV ??? ATK
		print("Il reste {} PV au monstre".format(???))

	def AfficherEtat(self):
		print("Le monstre a {} PV et {} ATK".format(self.PV, self.ATK))

class Joueur:
	def __init__(???, PV, ATK):
		self.??? = PV
		self.ATK = ???
		self.AfficherEtat()

	def EstVivant(self):
		???

	def AttaquerMonstre(self, monstre):
		???

	def ParadeReussie(self):
		entier = ???
		return entier <= 2

	def PrendreDegats(self, ATK):
		if self.???() :
			print("Le joueur a paré")
		else :
			???
			print("Il reste {} PV au joueur".format(???))

	def AfficherEtat(self):
		print("Le joueur a {} PV et {} ATK".format(self.PV, self.ATK))

class Jeu:
	def __init__(self):
		pv_joueur = rnd.randint(50, 200)
		atk_joueur = rnd.randint(5, 20)
		self.joueur = Joueur(???, ???)

		nombre_monstres = rnd.randint(5, 20)
		# On crée une liste vide
		self.monstres = ???

		for compteur in range(???):
			pv = rnd.randint(10, 30)
			atk = rnd.randint(5, 20)
			monstre = Monstre(???, ???)

			# On ajoute le monstre dans la liste
			self.monstres.???(monstre)

		print()

	def IlResteDesMonstres(self):
		return ??? > 0

	def MonstreSuivant(self):
		print("Il reste {} monstres".format(???))
		monstre = self.monstres.???()

		monstre.AfficherEtat()

		return ???

	def Jouer(self):
		monstre = self.??? # On récupère le monstre Suivant
		while self.joueur.??? and self.??? and monstre.???: # Tant que le joueur est vivant ET qu'il reste des monstres ET que le monstre courant est vivant
			self.joueur.???(monstre) #  Le joueur attaque le monstre

			if monstre.???() : # Si le monstre est vivant
				monstre.???(???) # Il attque le joueur
			else :
				print("Le monstre est mort")
				print()
				monstre = self.???() # On récupère le monstre Suivant

		# En DEHORS du while :
		if self.joueur.???():
			print("Le joueur a gagné !")
			self.joueur.AfficherEtat()
		else :
			print("Les monstres ont gagné ...")

		
jeu = Jeu()

jeu.Jouer()
