print("Initialisation")
systeme_solaire = ["Vénus", "Tere", "Mars", "Jupiter", "Saturne", "Uranus", "Pluton"] # penser à préciser qu'on peut initialiser une liste vide
print(systeme_solaire)

print("Ajout de Neptune")
systeme_solaire.append("Neptune")
print(systeme_solaire)

print("Retrait de Pluton")
systeme_solaire.remove("Pluton")
print(systeme_solaire)

print("Insertion de Mercure")
systeme_solaire.insert(0, "Mercure")
print(systeme_solaire)

print("Correction de Terre")
systeme_solaire[2] = "Terre"
print(systeme_solaire)

print("Il y a {} planètes dans le système solaire".format(len(systeme_solaire)))

for planete in systeme_solaire:
	print(planete)

dernier_indice = len(systeme_solaire) - 1
derniere_planete = systeme_solaire[dernier_indice]
print("La dernière planète du système solaire est {}".format(derniere_planete))

print("Le système solaire sans la première et la dernière planète")
print(systeme_solaire[1 : dernier_indice])

