import turtle as trt

tortue = trt.Turtle()

distance = 70

for compteur in range(4):
	if compteur == 0:
		tortue.color("blue")
	elif compteur == 1:
		tortue.color("red")
	elif compteur == 2:
		tortue.color("green")
	else :
		tortue.color("orange")
	tortue.write(compteur)
	tortue.forward(distance)
	tortue.left(90)

trt.done()

