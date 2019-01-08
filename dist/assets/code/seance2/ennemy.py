class Ennemi :
	def __init__(self, PV):
		print(...)
		...

	def PrendreDegat(self, degats):
		self.PV = ...
		if ... > 0 :
			print(...)
		else :
			print("L'ennemi est mort")
class Arme:
	def __init__(...):
		print(...)
		self.degats = degats
class Hero :
	def __init__(...):
		...
		... = ...

	def Attaquer(self, ennemi):
		ennemi.???(self.arme.degats)

degats = 10
PV = 50

epee = Arme(degats)
hero = Hero(epee)
ennemi = Ennemi(PV)

for i in range(5):
	hero.Attaquer(ennemi)
