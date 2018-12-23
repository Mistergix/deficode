import turtle as trt

nicolas = trt.Turtle()
julian = trt.Turtle()

nicolas.pencolor("red")
nicolas.pensize(5) # ne pas oublier de demander ce que fait pensize
nicolas.backward(50)
nicolas.write("Nicolas")

julian.pencolor("blue")
julian.pensize(15) # ne pas oublier de demander ce que fait pensize
julian.forward(50)
julian.write("Julian")


trt.done()
