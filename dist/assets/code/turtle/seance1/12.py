import turtle as trt

def dessinerV(distance):
	trt.right(25)
	trt.forward(distance)
	trt.backward(distance)
	trt.left(50)
	trt.forward(distance)
	trt.backward(distance)
	trt.right(25)

def dessinerBranche(nombreV, tailleV):
	for compteur in range(nombreV):
		trt.forward(tailleV)
		dessinerV(tailleV)

	trt.backward(nombreV * tailleV)

def dessinerFlocon(nombreBranche, nombreV, tailleV):
	trt.pensize(6)
	trt.color("white")
	trt.Screen().bgcolor("turquoise")
	for compteur in range(nombreBranche):
		dessinerBranche(nombreV, tailleV)
		trt.right(360/nombreBranche)

dessinerFlocon(6, 6, 10)

trt.done()
