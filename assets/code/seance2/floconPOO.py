import turtle as trt

class Flocon:
	def __init__(self, nombreBranche, nombreV, tailleV, epaisseur, couleur):
		self.nombreBranche = ...
		... = nombreV
		self.tailleV = tailleV

		self.tortue = trt.Turtle()
		self.tortue.pensize(...)
		self.tortue.color(couleur)

	def AllerSansTracer(self, x, y):
		...
		...
		...

	def DessinerV(self):
		self.tortue.right(25)
		???.forward(...)
		???.backward(...)
		???.left(50)
		???.forward(...)
		???.backward(...)
		???.right(...)

	def DessinerBranche(self):
		for compteur in range(...):
			self.tortue.forward(...)
			dessinerV(...)

		self.tortue.backward(... * ...)

	def Dessiner(self, x, y):
		self.AllerSansTracer(..., ...)
		for compteur in range(...):
			self.DessinerBranche()
			angle = 360/...
			???.right(...)

floconBleu = Flocon(6, 4, 30, 5, "blue")
floconBleu.Dessiner(0, 0)

monFlocon = Flocon(..., ..., ..., ..., ...)
monFlocon.Dessiner(..., ...)

trt.done()
