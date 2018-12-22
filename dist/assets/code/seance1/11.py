import turtle as trt

def polygone(distance, nombre_cotes):
	tortue = trt.Turtle()
	angle = 360/nombre_cotes
	for compteur in range(nombre_cotes):
		tortue.forward(distance)
		tortue.left(angle)

polygone(50, 4)
polygone(90, 3)
polygone(90, 8)

trt.done()
