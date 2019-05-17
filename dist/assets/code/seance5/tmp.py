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
	ECRAN.fill((255, 255, 255))

	ROUGE = (255, 0, 0)
	BLEU = (0, 0, 255)
	VERT = (0, 255, 0)
	mon_rect = pg.Rect(10, 10, LARGEUR - 20, HAUTEUR - 20)

	pg.draw.rect(ECRAN, ROUGE, mon_rect)
	pg.draw.ellipse(ECRAN, BLEU, mon_rect, 5)
	pg.draw.line(ECRAN, VERT, (0, 0), (LARGEUR, HAUTEUR), 5)

	pg.display.update()
	HORLOGE.tick(FPS)

pg.quit()
