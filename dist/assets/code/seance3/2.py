import random as rnd

minimum = 1
maximum = 6

nombre = rnd.randint(minimum, maximum)

print("Le nombre est {}".format(nombre))

if nombre <= 3 :
	print("En dessous ou égal à 3")
elif nombre == 4 :
	print("Egal à 4")
else :
	print("Au dessus ou égal à 5")
