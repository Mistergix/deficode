import turtle as trt

distance = 70
angle = 90

for compteur in range(4):
	if compteur == 0:
		trt.color("blue")
	elif compteur == 1:
		trt.color("red")
	elif compteur == 2:
		trt.color("green")
	else :
		trt.color("orange")
	trt.write(compteur)
	trt.forward(distance)
	trt.left(angle)

trt.done()

