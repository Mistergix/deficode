import pygame as pg
import random as rnd

class Colors:
    BLACK = (0,0,0)
    RED = (255,0,0)
    BLUE = (65, 114, 225)
    WHITE = (200,200,200)
    YELLOW = (247, 230, 152)
    DARKER_BLUE = (76, 124, 165)
    GREY = (128, 128, 128)

class Direction:
	HAUT   = "haut"
	BAS    = "bas"
	GAUCHE = "gauche"
	DROITE = "droite"
	AUCUNE = "aucune"

	@staticmethod
	def DirectionOpposee(direction):
		if direction == Direction.DROITE:
			return Direction.GAUCHE
		if direction == Direction.GAUCHE:
			return Direction.DROITE
		if direction == Direction.BAS:
			return Direction.HAUT
		if direction == Direction.HAUT:
			return Direction.BAS

		# La direction passée en argument n'a pas d'opposé
		return Direction.AUCUNE

	@staticmethod
	def DeplacementSelonDirection(direction):
		if direction == Direction.DROITE:
			return (1, 0)
		if direction == Direction.GAUCHE:
			return (-1, 0)
		if direction == Direction.BAS:
			return (0, 1)
		if direction == Direction.HAUT:
			return (0, -1)

		return (0, 0)

class Position:
	def __init__(self, x, y):
		self.x = x
		self.y = y
	
	def EnTuple(self):
		return (self.x, self.y)
	
	@staticmethod
	def PositionAleatoire(x_min, x_max, y_min, y_max):
		x = rnd.randint(x_min, x_max)
		y = rnd.randint(y_min, y_max)
		return Position(x,y)

class Dessinateur:
	@staticmethod
	def ObtenirRectangle(position, taille):
		x, y = position.EnTuple()
		coin_gauche_x = x * taille
		coin_gauche_y = y * taille
		largeur = taille
		hauteur = taille
		rectangle = pg.Rect(coin_gauche_x, coin_gauche_y, largeur, hauteur)

		return rectangle

class Pomme :
	def __init__(self, position):
		self.position = position

	def Dessiner(self, ecran, taille):
		rectangle = Dessinateur.ObtenirRectangle(self.position, taille)
		pg.draw.ellipse(ecran, Colors.RED, rectangle)

class Membre:
	def __init__(self, position):
		self.position = position

	def Copier(self):
		x, y = self.position.EnTuple()
		return Membre(Position(x, y))

class Corps:
	def __init__(self, position_initiale):
		self.tete = Membre(position_initiale)
		self.corps = [self.tete]

	def Dessiner(self, ecran, taille):
		# Faire un template method
		for membre in self.corps:
			position = membre.position
			rectangle = Dessinateur.ObtenirRectangle(position, taille)
			if membre == self.tete:
				color = Colors.DARKER_BLUE
			else : 
				color = Colors.BLUE
			pg.draw.rect(ecran, color, rectangle)

	def Grossir(self):
		queue = self.Queue()
		nouvelle_queue = queue.Copier()
		self.corps.append(nouvelle_queue)

	def Queue(self):
		# Le dernier element de la liste
		return self.corps[self.LongueurCorps() - 1]

	def Tete(self):
		return self.corps[0]

	def CorpsSansTete(self):
		# On saute l'indice 1
		if( self.LongueurCorps() >= 2):
			return self.corps[1:]
		return []

	def Avancer(self, deplacement):
		x, y = self.tete.position.EnTuple()
		deplacement_x, deplacement_y = deplacement
		x += deplacement_x
		y += deplacement_y

		self.tete = Membre(Position(x, y))

		self.corps.pop(self.LongueurCorps() - 1)
		self.corps.insert(0, self.tete)

	def LongueurCorps(self):
		return len(self.corps)


class Serpent :
	def __init__(self, position_initiale):
		self.corps = Corps(position_initiale)
		self.direction = Direction.AUCUNE

	def ChangerDirection(self, direction):
		if self.PeutAllerDansCetteDirection(direction):
			self.direction = direction

	def PeutAllerDansCetteDirection(self, direction):
		direction_opposee = Direction.DirectionOpposee(direction)
		return self.direction != direction_opposee

	def Dessiner(self, ecran, taille):
		self.corps.Dessiner(ecran, taille)

	def Avancer(self):
		deplacement = Direction.DeplacementSelonDirection(self.direction)
		self.corps.Avancer(deplacement)

	def MangerPomme(self):
		self.corps.Grossir()

	def Tete(self):
		return self.corps.Tete()

class Jeu:
	def __init__(self):
		self.NOMBRE_CASES = 30
		self.TAILLE_CASE = 20 # En pixels
		self.TAILLE_ECRAN = self.NOMBRE_CASES * self.TAILLE_CASE

		self.FPS = 15
		self.COULEUR_ARRIERE_PLAN = Colors.YELLOW
		self.LE_JEU_TOURNE = True
		self.NOM_DU_JEU = "Snake"

	def Demarrer(self):
		pg.init()
		self.ECRAN = pg.display.set_mode((self.TAILLE_ECRAN, self.TAILLE_ECRAN))
		pg.display.set_caption(self.NOM_DU_JEU)
		self.HORLOGE = pg.time.Clock()

		while self.LE_JEU_TOURNE:
			self.InitialiserPartie()
			self.LancerBouclePrincipale()

		pg.quit()

	def InitialiserPartie(self):
		centre = self.NOMBRE_CASES // 2

		self.serpent = Serpent(Position(centre, centre))
		self.pomme = self.NouvellePomme()
	
	def LancerBouclePrincipale(self):
		self.GAME_OVER = False

		while not self.GAME_OVER:
			self.Evenements()
			self.LogiqueDuJeu()
			self.Dessin()

	def NouvellePomme(self):
		x_min = 0
		y_min = 0
		x_max = self.NOMBRE_CASES - 1
		y_max = self.NOMBRE_CASES - 1
		position = Position.PositionAleatoire(x_min, x_max, y_min, y_max)
		pomme = Pomme(position)
		return pomme

	def Evenements(self):
		for evenement in pg.event.get():
			if evenement.type == pg.QUIT:
				self.GAME_OVER = True
				self.LE_JEU_TOURNE = False
			elif evenement.type == pg.KEYDOWN:
				touche = evenement.key
				if touche == pg.K_LEFT:
					self.serpent.ChangerDirection(Direction.GAUCHE)
				elif touche == pg.K_RIGHT:
					self.serpent.ChangerDirection(Direction.DROITE)
				elif touche == pg.K_UP:
					self.serpent.ChangerDirection(Direction.HAUT)
				elif touche == pg.K_DOWN:
					self.serpent.ChangerDirection(Direction.BAS)
	
	def LogiqueDuJeu(self):
		x, y = self.serpent.Tete().position.EnTuple()

		if x == -1 or x == self.NOMBRE_CASES or y == -1 or y == self.NOMBRE_CASES:
			self.GAME_OVER = True
			return
		
		for membre in self.serpent.corps.CorpsSansTete():
			membre_x, membre_y = membre.position.EnTuple()
			if x == membre_x and y == membre_y:
				self.GAME_OVER = True
				return

		pomme_x, pomme_y = self.pomme.position.EnTuple()
		if x == pomme_x and y == pomme_y:
			self.serpent.MangerPomme()
			self.pomme = self.NouvellePomme()

		self.serpent.Avancer()

	def DessinerGrille(self):
		for x in range(self.NOMBRE_CASES):
			pg.draw.line(self.ECRAN, Colors.GREY, (x * self.TAILLE_CASE, 0), (x * self.TAILLE_CASE, self.TAILLE_ECRAN))
		for y in range(self.NOMBRE_CASES):
			pg.draw.line(self.ECRAN, Colors.GREY, (0, y * self.TAILLE_CASE), (self.TAILLE_ECRAN, y * self.TAILLE_CASE))

	def Dessin(self):
		self.ECRAN.fill(self.COULEUR_ARRIERE_PLAN)
		self.DessinerGrille()

		self.pomme.Dessiner(self.ECRAN, self.TAILLE_CASE)
		self.serpent.Dessiner(self.ECRAN, self.TAILLE_CASE)

		pg.display.update()
		self.HORLOGE.tick(self.FPS)
	
jeu = Jeu()
jeu.Demarrer()
