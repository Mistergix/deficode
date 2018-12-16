#exo triangle
import turtle as trt

def triangle(distance):
	tortue = trt.Turtle()
	for compteur in range(3):
		tortue.forward(distance)
		tortue.left(120)

triangle(50)
triangle(90)

trt.done()


