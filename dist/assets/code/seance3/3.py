import random as rnd

continuer = True

while continuer :
	nombre = rnd.randint(1, 1000)
	print(nombre)
	if nombre < 5 :
		continuer = False
