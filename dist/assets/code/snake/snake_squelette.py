import pygame as pg
import random as rnd

class Colors:
	"""
	Rends-toi sur Internet et complète ces couleurs selon tes goûts
	"""
    BLACK = (0, 0, 0)
    RED = ...
    BLUE = ...
    WHITE = ...
    YELLOW = ...

class Direction:
	# Le serpent peut aller dans 4 directions ou ne pas bouger
	HAUT = "haut"
	BAS = "bas"
	GAUCHE = "gauche"
	DROITE = "droite"
	AUCUNE = "aucune"

	@staticmethod
	def DirectionOpposee(direction):
		"""
		Cette méthode prend une direction et en renvoit l'opposé (par exemple l'opposé de Direction.DROITE c'est Direction.GAUCHE)
		A toi de la compléter
		"""
		if direction == Direction.DROITE:
			return Direction.GAUCHE
		if direction == Direction.???:
			return Direction.???
		if direction == Direction.???:
			return Direction.???
		if ... :
			return ...

		# La direction passée en argument n'a pas d'opposé
		return Direction.AUCUNE

	@staticmethod
	def DeplacementSelonDirection(direction):
		"""
		Cette méthode renvoit un tuple indiquant la valeur qu'on doit ajouter à une position pour aller dans cette direction.
		(Par exemple, si on veut aller à droite, il faut ajouter 1 à x et 0 à y, donc on renvoit (1,0))
		A toi de la compléter
		"""
		if direction == Direction.DROITE:
			return (1, 0)
		if direction == Direction.GAUCHE:
			return ...
		if ... :
			return ...
		if ... :
			return ...

		return (0, 0)

class Position:
	# Permet de savoir sur quelle case se trouve un objet
	def __init__(self, x, y):
		self.x = x
		self.y = y
	
	def EnTuple(self):
		"""
		Cette méthode permet de convertir l'objet Position en tuple
		Que faut-il renvoyer ?
		"""
		return (..., ...)
	
	@staticmethod
	def PositionAleatoire(x_min, x_max, y_min, y_max):
		"""
		Cette méthode renvoit une position aléatoire
		x est compris entre x_min et x_max
		y est compris entre y_min et y_max
		Complète cette méthode
		"""
		x = rnd.randint(... , ...)
		y = ...
		return Position(x, y)

class Dessinateur:
	# Permet de dessiner facile certains objets
	@staticmethod
	def ObtenirRectangle(position, taille_rectangle):
		"""
		Convertit une position en le rectangle correspondant sur l'écran (Voir le site pour plus de détails)
		(Par exemple si la taille d'une case est 20 pixels et la position est (1, 2), le coin gauche du rectangle est le pixel (20, 40)
		et sa largeur x hauteur est (20, 20))
		Complète cette méthode, n'oublie pas le return !
		"""
		x, y = position.EnTuple()
		coin_gauche_x = x * taille_rectangle
		coin_gauche_y = ...
		largeur = taille_rectangle
		hauteur = ...
		rectangle = pg.Rect(..., coin_gauche_y, largeur, ...)

		return 

class Pomme :
	def __init__(self, position):
		self.position = position

	def Dessiner(self, ecran, taille_case):
		"""
		Cette méthode dessine une pomme en forme de cercle rouge (Rappel un cercle est une ellipse)
		Complète cette méthode, n'oublie pas de remplacer le ???
		"""
		rectangle = Dessinateur.ObtenirRectangle( , )
		pg.draw.???(... , Colors.RED, ...)

class Membre:
	# Représente un membre du corps du serpent
	def __init__(self, position):
		self.position = position

	def Copier(self):
		"""
		Cette méthode renvoit un clone du membre avec la même position
		Elle renvoit un Membre, mais son constructeur est vide, que faut-il mettre ?
		"""
		x, y = self.position.EnTuple()
		return Membre(...)

class Corps:
	# Le corps du serpent
	# On sait où est sa tête qui est un membre
	# Le corps est representé par une liste ou le premier élément est la tête et le dernier la queue
	def __init__(self, position_initiale):
		self.tete = Membre(position_initiale)
		self.corps = [self.tete]

	def Dessiner(self, ecran, taille_case):
		"""
		On parcourt tous les membres du corps et on dessine un rectangle bleu pour chaque membre, à la bonne position sur l'écran
		Complète cette méthode
		"""
		for ... in ...:
			position = membre.???
			rectangle = Dessinateur.ObtenirRectangle(... , ...)
			color = ...
			pg.draw.???(... , ... , ...)

	def Grossir(self):
		"""
		Rajoute un nouveau membre dans le corps qui remplace la queue du serpent
		La nouvelle queue est une copie de l'ancienne
		Complète cette méthode
		"""
		queue = self.Queue()
		nouvelle_queue = queue.Copier()
		self.corps.append(nouvelle_queue)

	def Tete(self):
		"""
		Renvoit le premier élément de la liste (attention au piège)
		"""
		return self.corps[...]

	def LongueurCorps(self):
		"""
		Renvoit la longueur de la liste
		"""
		return ...

	def Queue(self):
		"""
		Renvoit le dernier élément de la liste
		"""
		return ...

	def CorpsSansTete(self):
		"""
		Renvoit le corps du serpent sans la tête, ça veut dire qu'on saute le premier élément !
		Il faut s'assurer que le corps a au moins 2 membres
		Si ce n'est pas le cas, on renvoit la liste vide
		"""
		if( ... >= ... ):
			return self.corps[...] # On renvoit toute la liste, sauf le premier élément
		return ...

	def Avancer(self, deplacement):
		x, y = self.tete.position.EnTuple()
		deplacement_x, deplacement_y = deplacement
		x += deplacement_x
		y += deplacement_y

		self.tete = Membre(Position(x, y))

		self.corps.pop(self.LongueurCorps() - 1)
		self.corps.insert(0, self.tete)


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

	def Demarrer(self):
		pg.init()
		self.ECRAN = pg.display.set_mode((self.TAILLE_ECRAN, self.TAILLE_ECRAN))
		pg.display.set_caption("Snake")
		self.HORLOGE = pg.time.Clock()

		while self.LE_JEU_TOURNE:
			self.Jouer()

		pg.quit()
	
	def Jouer(self):
		centre = self.NOMBRE_CASES // 2

		self.serpent = Serpent(Position(centre, centre))
		self.pomme = self.NouvellePomme()

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
		

	def Dessin(self):
		self.ECRAN.fill(self.COULEUR_ARRIERE_PLAN)
		self.pomme.Dessiner(self.ECRAN, self.TAILLE_CASE)
		self.serpent.Dessiner(self.ECRAN, self.TAILLE_CASE)

		pg.display.update()
		self.HORLOGE.tick(self.FPS)
	
jeu = Jeu()
jeu.Demarrer()
