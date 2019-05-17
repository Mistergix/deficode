class Mine :
	def __init__(self):
		self.tresorerie = 0

	def Travailler(self):
		self.tresorerie += 10

class Forge :
	def __init__(self):
		self.tresorerie = 0

	def Travailler(self):
		self.tresorerie += 50

class Taverne :
	def __init__(self):
		self.tresorerie = 0

	def Travailler(self):
		self.tresorerie += 20

class Gobelin:
	def __init__(self):
		self.mine = Mine()
		self.forge = Forge()
		self.taverne = Taverne()

		self.objectif = 1000

		print("Le gobelin veut {} pièces d'or".format(self.objectif))

	def Travailler(self):
		self.mine.Travailler()
		self.forge.Travailler()
		self.taverne.Travailler()
		print("La trésorerie du gobelin est de {} pièces d'or".format(self.TotalTresorerie()))

	def ObjectifAtteint(self):
		return self.TotalTresorerie() >= self.objectif

	def TotalTresorerie(self):
		return self.mine.tresorerie + self.forge.tresorerie + self.taverne.tresorerie

gobelin = Gobelin()

while not gobelin.ObjectifAtteint() :
	gobelin.Travailler()

print("Le gobelin a atteint son objectif !")
