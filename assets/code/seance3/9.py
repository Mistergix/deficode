def f():
  print("je suis f")
  
class Chien:
  def __init__(self):
    print("wouf")
              
tas = ["camembert", Chien, 42, True, [0, "cocotier"], f, "pain"]
tas[1]()
tas[5]()
print(tas[4])

#2

liste_ports = [8080, 943]
for i in range(2):
  print("virus envoyé sur le port {}!".format(liste_ports[i]))
