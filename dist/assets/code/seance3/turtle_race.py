import turtle as trt
import random as rnd

class Tortue:
	def __init__(???, position, vitesse, couleur):
		self.position = position
		self.vitesse = vitesse
		self.tortue = trt.Turtle()
		self.tortue.pencolor(???)
		self.SePositionner()

	def Avancer(self):
		x, y = ???
		self.position = (x + self.vitesse, y)
		self.tortue.forward(???)

	def SePositionner(self):
		x, y = self.position
		self.tortue.penup()
		self.tortue.goto(x, y)
		self.tortue.pendown()

	def Gagner(self):
		self.tortue.write("J'ai gagné !")

	def Perdre(self):
		self.tortue.write("J'ai perdu...")

class Course :
	def __init__(self, nombretortues):
		assert ???, "Le nombre de tortues doit être plus grand que 1"
		assert nombretortues <= 6, ???

		self.couleurs = ["red", "blue", "green", "purple", "grey", "yellow"]
		self.nombretortues = nombretortues
		self.positions = self.ToutesLesPositions()

		self.tortues = []

		self.InitialiserTortues()

		self.arrivee = 320

	def InitialiserTortues(self):
		for i in range(self.nombretortues):
			position = self.positions[???]
			vitesse = rnd.randint(2, ???)
			couleur = rnd.???(self.couleurs)
			
			tortue = Tortue(???, vitesse, ???)

			self.tortues.???(tortue)

	def PasDeGagnants(self):
		for tortue in self.tortues :
			x, y = tortue.position
			if x >= ??? :
				return ???

		return ???

	def ContinuerCourse(self):
		for ??? in ??? :
			tortue.???()

	def AfficherResultats(self):
		perdant, ??? = self.TrouverPerdantEtGagnant()
		???.Perdre()
		gagnant.???()

	def Lancer(self):
		while self.PasDeGagnants() :
			self.???()

		self.AfficherResultats()

	def TrouverPerdantEtGagnant(self):
		perdant = self.tortues[0]
		gagnant = self.tortues[0]
		for tortue in self.tortues :
			x_perdant, y_perdant = perdant.position
			x_gagnant, y_gagnant = gagnant.position
			x_tortue, y_tortue = tortue.position

			if x_tortue < x_perdant :
				perdant = tortue

			if x_tortue > x_gagnant :
				gagnant = tortue

		return perdant, gagnant

	def ToutesLesPositions(self):
		if self.nombretortues == 1 :
			return [(-370, 0)]
		elif self.nombretortues == 2 :
			return [(-370, -200), (-370, 200)]
		elif self.nombretortues == 3 :
			return [(-370, -200), (-370, 200), (-370, 0)]
		elif self.nombretortues == 4 :
			return [(-370, -300), (-370, -100), (-370, 100), (-370, 300)]
		elif self.nombretortues == 5 :
			return [(-370, 0), (-370, -300), (-370, -100), (-370, 100), (-370, 300)]

		return [(-370, -200), (-370, 200), (-370, -300), (-370, -100), (-370, 100), (-370, 300)]


course_en_ligne_droite = Course(???)

course_en_ligne_droite.???()

trt.done()
