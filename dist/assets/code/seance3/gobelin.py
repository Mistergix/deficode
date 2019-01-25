class Mine :
	def __init__(self):
		# Au début, la mine a zéro pièce d'or
			self.tresorerie = ???

	def Travailler(self):
		self.tresorerie += 10

class Forge :
	def __init__(self):
		self.tresorerie = 0

	def Travailler(self):
		# La forge rapporte 50 pièces d'or
		self.tresorerie += ???

class Taverne :
	def __init__(self):
		self.tresorerie = 0

	def Travailler(self):
		# La taverne rapporte 20 pièces d'or
		???

class Gobelin:
	def __init__(self):
		self.??? = Mine()
		self.forge = ???()
		self.??? = Taverne()

		self.objectif = 1000

		print("Le gobelin veut {} pièces d'or".format(???))

	def TotalTresorerie(self):
		return self.mine.??? + ??? + ???

	def ObjectifAtteint(self):
		return ??? >= self.objectif

	def Travailler(self):
		self.mine.Travailler()
		self.forge.Travailler()
		self.taverne.Travailler()
		print("La trésorerie du gobelin est de {} pièces d'or".format(self.TotalTresorerie()))

gobelin = Gobelin()

while ??? gobelin.ObjectifAtteint() :
	gobelin.???()

print("Le gobelin a atteint son objectif !")
