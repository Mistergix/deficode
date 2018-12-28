import turtle as trt

def carre(distance):
	for compteur in range(4):
		trt.forward(distance)
		trt.left(90)

carre(90)
carre(120)
carre(200)

trt.done()
