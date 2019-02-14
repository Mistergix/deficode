import pygame as pg

class Direction:
	HAUT   = "haut"
	BAS    = "bas"
	AUCUNE = "aucune"

pg.init()

LARGEUR = 400
HAUTEUR = 300
ECRAN = pg.display.set_mode((LARGEUR, HAUTEUR))

NOM = "Mon jeu"
pg.display.set_caption(NOM)

FPS = 30
HORLOGE = pg.time.Clock()

ROUGE = (255, 0, 0)

direction_actuelle = Direction.AUCUNE
position = (LARGEUR/2, HAUTEUR/2)

continuer = True
while continuer :
	# Gestion des événements
	for evenement in pg.event.get():
			if evenement.type == pg.QUIT:
				continuer = False # ça arrête la boucle
			elif evenement.type == pg.KEYDOWN :
				touche = evenement.key
				if touche == pg.K_DOWN :
					direction_actuelle = Direction.BAS
				elif touche == pg.K_UP :
					direction_actuelle = Direction.HAUT
				else :
					direction_actuelle = Direction.AUCUNE

	# Logique du jeu 

	x, y = position

	if direction_actuelle == Direction.BAS and y < HAUTEUR - 20:
		y += 5
	elif direction_actuelle == Direction.HAUT and y >= 0:
		y -= 5

	position = (x, y)
	mon_rect = pg.Rect(x, y, 20, 20)

	# Dessin
	ECRAN.fill((0, 0, 0))
	
	pg.draw.ellipse(ECRAN, ROUGE, mon_rect)

	pg.display.update()
	HORLOGE.tick(FPS)

pg.quit()
