import turtle as trt

distance = 70
angle = 90

for compteur in range(4):
	trt.write(compteur)
	trt.forward(distance)
	trt.left(angle)

trt.done()
