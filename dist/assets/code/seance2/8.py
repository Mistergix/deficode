#exo en faire un squelette

class Ennemi :
	def __init__(self, PV):
		print("Ennemi créé")
		self.PV = PV

	def PrendreDegats(self, degats):
		self.PV = self.PV - degats
		if self.PV > 0 :
			print ("Il reste {0} PV à l'ennemi".format(self.PV))
		else :
			print("L'ennemi est mort")

class Arme:
	def __init__(self, degats):
		print("Arme créée")
		self.degats = degats

class Hero :
	def __init__(self, arme):
		print("Héro créé")
		self.arme = arme

	def Attaquer(self, ennemi):
		ennemi.PrendreDegats(self.arme.degats)

degats = 10
PV = 50

epee = Arme(degats)
hero = Hero(epee)
ennemi = Ennemi(PV)

for i in range(5):
	hero.Attaquer(ennemi)
