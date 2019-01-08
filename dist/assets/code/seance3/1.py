class Ennemi :
	def __init__(self, PV):
		self.PV = PV

	def PrendreDegat(self, degats):
		self.PV = self.PV - degats
		if self.PV > 0 :
			print("Il reste {} PV à l'ennemi".format(self.PV))
		else :
			print("L'ennemi est mort")
class Arme:
	def __init__(self, degats):
		self.degats = degats
class Hero :
	def __init__(self, arme):
		self.arme = arme

	def Attaquer(self, ennemi):
		ennemi.PrendreDegat(self.arme.degats)

degats = 10
PV = 50

epee = Arme(degats)
hero = Hero(epee)
ennemi = Ennemi(PV)

for i in range(5):
	hero.Attaquer(ennemi)
