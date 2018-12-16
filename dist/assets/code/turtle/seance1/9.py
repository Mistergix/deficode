import turtle as trt

def carre(distance):
	tortue = trt.Turtle()
	for compteur in range(4):
		tortue.forward(distance)
		tortue.left(90)

carre(50)
carre(90)

trt.done()

