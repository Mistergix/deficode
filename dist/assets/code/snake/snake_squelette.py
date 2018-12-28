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
	# Permet de dessiner facilement certains objets
	def ObtenirRectangle(position, taille_rectangle):
		"""
		Convertit une position en le rectangle correspondant sur l'écran (Voir le site pour plus de détails)
		(Par exemple si la taille d'une case est 20 pixels et la position est (1, 2), le coin gauche du rectangle est le pixel (20, 40)
		et sa largeur x hauteur est (20, 20))
		Complète cette méthode
		"""
		x, y = position.EnTuple()
		coin_gauche_x = x * taille_rectangle
		coin_gauche_y = ...
		largeur = taille_rectangle
		hauteur = ...
		rectangle = pg.Rect(..., coin_gauche_y, largeur, ...)

		return ...

class Pomme :
	def __init__(self, position):
		self.position = position

	def Dessiner(self, ecran, taille_case):
		"""
		Cette méthode dessine une pomme en forme de cercle rouge (Rappel un cercle est une ellipse)
		Complète cette méthode, n'oublie pas de remplacer le ???
		"""
		rectangle = Dessinateur.ObtenirRectangle( ..., ...)
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
		"""
		Pas facile, tu peux passer au début
		On sait vers où le serpent se déplace, deplacement est un tuple qui indique de combien on bouge en x et en y, c'est un tuple
		On récupère la position de la tête, on lui ajoute le déplacement
		On crée un nouveau Membre avec cette nouvelle position
		On retire le dernier élement de la liste (la queue)
		On insert la tête en première position
		"""
		x, y = self.tete.position.EnTuple()
		deplacement_x, deplacement_y = ...
		x += deplacement_x
		y += ...

		self.tete = Membre(Position(x, y))

		self.corps.pop(...)
		self.corps.insert(..., ...)

class Serpent :
	def __init__(self, position_initiale):
		"""
		La direction initiale du serpent est Direction.AUCUNE
		"""
		self.corps = Corps(position_initiale)
		self.direction = ...

	def PeutAllerDansCetteDirection(self, direction):
		"""
		Permet de savoir si le serpent peut aller dans une direction
		Il peut aller dans une direction, s'il ne va pas déjà dans la direction opposée
		Exemple : S'il va à dejà vers la gauche, il ne peut pas aller à droite
		"""
		direction_opposee = Direction.DirectionOpposee(...)
		return ... != ...

	def ChangerDirection(self, direction):
		"""
		S'il peut aller dans cette direction, on change sa direction
		"""
		if ???(direction):
			self.direction = ...

	def Dessiner(self, ecran, taille):
		# Ici tu n'as rien à faire, on fait ce qu'on appelle une délégation, 
		# cela veut dire que celui qui dessine n'est pas le serpent mais son corps
		# La tâche de dessin est déléguée
		self.corps.Dessiner(ecran, taille)

	def Avancer(self):
		"""
		Ici on délègue l'avancement du serpent à son corps
		Il faut avant calculer le déplacement
		"""
		deplacement = Direction.DeplacementSelonDirection(...)
		self.corps.Avancer(...)

	def MangerPomme(self):
		"""
		Quand le serpent mange une pomme, son corps grossit
		"""
		self.corps.???

	def Tete(self):
		# Tu n'as rien à faire, c'est une méthode pour récupérer la tête du serpent
		return self.corps.Tete()

	def SeTouche(self):
		x, y = self.Tete().position.EnTuple()
		for membre in self.corps.???(): # On parcourt le corps du serpent, SANS la tête
			membre_x, membre_y = membre.position.???()
			if x == ... and ... == membre_y:
				# Le serpent se touche
				return ...

		# on a parcourut tout le corps, le serpent ne se touche pas
		return ...

class Jeu:
	def __init__(self):
		"""
		Les constantes du jeu
		Si on connait le nombre de cases, et la taille d'une case, qu'elle est la taille de la fenêtre ?
		"""
		self.NOMBRE_CASES = 30
		self.TAILLE_CASE = 20 # En pixels
		self.TAILLE_ECRAN = ...

		self.FPS = 15
		self.COULEUR_ARRIERE_PLAN = Colors.YELLOW
		self.LE_JEU_TOURNE = True

	def Demarrer(self):
		"""
		Il faut initialiser pygame au début
		On crée un un écran dont la taille est définie par self.TAILLE_ECRAN
		Tant que le jeu tourne, on joue
		Il faut quitter pygame à la fin
		"""
		pg.???
		self.ECRAN = pg.display.set_mode((..., ...))
		self.HORLOGE = pg.time.Clock() # Permettra de limiter le nombre d'images par seconde

		while ...:
			self.Jouer()

		pg.???

	def NouvellePomme(self):
		"""
		On crée une pomme à une position aléatoire
		Il faut limiter l'endroit où apparaît la pomme avec x_min, x_max etc.
		"""
		x_min = ...
		y_min = ...
		x_max = ... - 1
		y_max = ... - 1
		position = Position.PositionAleatoire(..., ..., ..., y_max)
		pomme = Pomme(...)
		return ...

	def SerpentToucheUnBord(self):
		x, y = self.serpent.Tete().position.EnTuple()

		if x == -1 or x == ... or y == ... or y == self.NOMBRE_CASES:
			# Le serpent touche le bord
			return ...

		return ...

	def SerpentTouchePomme(self):
		pomme_x, pomme_y = self.???.position.EnTuple()
		x, y = self.serpent.Tete().position.EnTuple()
		if x ... pomme_x ... y ... pomme_y:
			# le serpent touche la pomme
			return ...

		return ...
		
	
	def Jouer(self):
		"""
		Le centre est la case centrale, par exemple s'il y a 16 cases, le centre est la 8ème
		On crée un serpent dont la position_initiale est au centre
		On crée une nouvelle pomme
		Tant que ce n'est pas GAME_OVER, on regarde les évenements, on applique la logique du jeu et on dessine les éléments
		"""
		centre = ...

		self.serpent = Serpent(Position(..., ...))
		self.pomme = self.???()

		self.GAME_OVER = False

		while ... self.GAME_OVER:
			self.Evenements()
			self.LogiqueDuJeu()
			self.Dessin()

	def Evenements(self):
		"""
		Si l'evenement est QUIT, on met GAME_OVER à True et LE_JEU_TOURNE à False
		Si on appuie sur une touche, on change la direction du serpent en conséquence
		"""
		for evenement in pg.event.get():
			if evenement.type == pg.???:
				self.GAME_OVER = ...
				self.??? = False
			elif evenement.type == pg.???:
				touche = evenement.key
				if touche == pg.K_LEFT:
					self.serpent.ChangerDirection(Direction.???)
				elif touche == pg.K_RIGHT:
					...
				elif touche == pg.K_UP:
					...
				elif touche == pg.K_DOWN:
					...
	
	def LogiqueDuJeu(self):
		"""
		On vérifie si la tête du serpent touche les bords de l'écran
		Ou si elle touche un autre membre du corps
		Si c'est le cas, on met GAME_OVER à True et on arrête la fonction avec un return
		Après on vérifie si elle touche une pomme, si oui le serpent mange la pomme et on crée une nouvelle pomme
		Enfin on fait avancer le serpent
		"""

		if self.SerpentToucheUnBord() or self.serpent.SeTouche():
			self.GAME_OVER = ...
			return
			
		if self.SerpentTouchePomme():
			self.serpent.???()
			self.??? = self.NouvellePomme()

		self.serpent.???()
		

	def Dessin(self):
		"""
		On remplit l'écran de la couleur d'arrière plan
		puis on dessine la pomme et le serpent
		On met à jour l'affichage
		Enfin, on limite le nombre de fps
		"""
		self.ECRAN.???(self.COULEUR_ARRIERE_PLAN)
		self.pomme.???(self.ECRAN, self.TAILLE_CASE)
		self.serpent.Dessiner(..., ...)

		pg.display.???()
		self.HORLOGE.???(self.FPS)
	
jeu = Jeu()
jeu.Demarrer()
