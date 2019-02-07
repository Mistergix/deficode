import pygame as pg

pg.init()

LARGEUR = 400
HAUTEUR = 300
ECRAN = pg.display.set_mode((LARGEUR, HAUTEUR))

NOM = "Mon jeu"
pg.display.set_caption(NOM)

position = (LARGEUR / 2, HAUTEUR / 2)
gauche = True

FPS = 30
HORLOGE = pg.time.Clock()

continuer = True
while continuer :
	# Gestion des événements
	for evenement in pg.event.get():
			if evenement.type == pg.QUIT:
				continuer = False # ça arrête la boucle

	# Logique du jeu 
	x, y = position
	if x < 0 and gauche:
		gauche = False
	elif x > LARGEUR and not gauche :
		gauche = True

	if gauche :
		x -= 5
	else :
		x += 5

	position = (x, y)

	# Dessin
	ECRAN.fill((0, 0, 0)) # Nettoyage de l'écran

	pg.draw.rect(ECRAN, (255, 0, 0), (x, y, 20, 20))

	pg.display.update()
	HORLOGE.tick(FPS)


pg.quit()


