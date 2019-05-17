import turtle as trt

def dessinerV(tailleV):
	trt.right(25)
	trt.forward(tailleV)
	trt.backward(...)
	trt.left(50)
	trt.forward(...)
	trt.backward(...)
	trt.right(...)

def dessinerBranche(nombreV, tailleV):
	for compteur in range(...):
		trt.forward(tailleV)
		dessinerV(...)

	trt.backward(nombreV * ...)

def dessinerFlocon(nombreBranche, nombreV, tailleV):
	for compteur in range(...):
		dessinerBranche(..., ...)
		angle = 360/...
		trt.right(angle)

dessinerFlocon(..., ..., ...)

trt.done()
