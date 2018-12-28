import turtle as trt

distance = 250

def triangle(distance):
	for compteur in range(3):
		trt.forward(distance)
		trt.left(120)

triangle(distance/2)
trt.forward(distance/2)
triangle(distance/2)
trt.left(60)
trt.forward(distance/2)
trt.left(60)
triangle(distance/2)

trt.done()
