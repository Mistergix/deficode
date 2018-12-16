import turtle as trt

tortue = trt.Turtle()

distance = 70

for compteur in range(4):
	tortue.write(compteur)
	tortue.forward(distance)
	tortue.left(90)

trt.done()
