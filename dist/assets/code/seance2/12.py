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
		self.tortue.penup()
		self.tortue.goto(x, y)
		self.tortue.pendown()

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
			self.tortue.right(...)

floconBleu = Flocon(6,4,30,5,"blue")
floconBleu = Flocon(..., ..., ..., ..., ...)

trt.done()
