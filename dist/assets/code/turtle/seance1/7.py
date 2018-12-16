import turtle as trt

tortue = trt.Turtle()

compteur = 1

if compteur == 0:
	tortue.color("blue")
elif compteur == 1:
	tortue.color("red")
elif compteur == 2:
	tortue.color("green")
else :
	tortue.color("orange")

tortue.forward(70)
trt.done()
