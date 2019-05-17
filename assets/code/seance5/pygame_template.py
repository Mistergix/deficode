import pygame as pg
import random as rnd

class Couleurs:
	BLACK = (0,0,0)
	RED = (255,0,0)
	BLUE = (0, 0, 200)

class Jeu:
	def __init__(self):
		"""
		Ici, on initialise des variables utiles
		"""

		self.TAILLE_ECRAN = 500 # pixels
		self.FPS = 15
		self.COULEUR_ARRIERE_PLAN = Couleurs.BLUE
		self.LE_JEU_TOURNE = True
		self.NOM_DU_JEU = "Mon premier jeu ennuyant"

	def LancerLeJeu(self):
		"""
		Ici, on lance Pygame et le jeu
		"""
		pg.init()
		self.ECRAN = pg.display.set_mode((self.TAILLE_ECRAN, self.TAILLE_ECRAN))
		pg.display.set_caption(self.NOM_DU_JEU)
		self.HORLOGE = pg.time.Clock()

		while self.LE_JEU_TOURNE:
			self.InitialiserPartie()
			self.LancerBouclePrincipale()

		pg.quit()

	def InitialiserPartie(self):
		"""
		Ici on crée les trucs indispensables pour une nouvelle partie : on remet les scores à zero, on crée un nouveau joueur etc.
		"""
		return
	
	def LancerBouclePrincipale(self):
		"""
		Ici on lance la boucle principale
		"""

		self.GAME_OVER = False

		while not self.GAME_OVER:
			self.Evenements()
			self.LogiqueDuJeu()
			self.Dessin()

	def Evenements(self):
		"""
		C'est ici qu l'on capte les évènements : touches appuyées, clic de souris etc.
		"""
		for evenement in pg.event.get():
			if evenement.type == pg.QUIT:
				self.GAME_OVER = True
				self.LE_JEU_TOURNE = False
	
	def LogiqueDuJeu(self):
		"""
		On écrit ici toute la logique du jeu
		"""
		return

	def NettoyerEcran(self):
		self.ECRAN.fill(self.COULEUR_ARRIERE_PLAN)

	def Dessin(self):
		self.NettoyerEcran()

		"""
		On écrit ici les commandes pour dessiner des choses à l'écran
		"""

		pg.display.update()
		self.HORLOGE.tick(self.FPS)
	
jeu = Jeu()
jeu.LancerLeJeu()
