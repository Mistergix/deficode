import pygame as pg

pg.init()

LARGEUR = 400
HAUTEUR = 300
ECRAN = pg.display.set_mode((LARGEUR, HAUTEUR))

NOM = "Mon jeu"
pg.display.set_caption(NOM)

FPS = 30
HORLOGE = pg.time.Clock()

continuer = True
while continuer :
	# Gestion des événements
	for evenement in pg.event.get():
			if evenement.type == pg.QUIT:
				continuer = False # ça arrête la boucle

	# Logique du jeu 

	# Dessin
	ECRAN.fill((0, 0, 0))

	pg.display.update()
	HORLOGE.tick(FPS)

pg.quit()
