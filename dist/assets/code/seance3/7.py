panier = []
liste_de_course = ["fromage", "gateaux", "fraises", "croissant", "papier wc", "vase", "pain"]

liste_de_course = liste_de_course + ["pizza", "cornichons"] + ["pommes"]


class Boulangerie:
    def __init__(self):
        self.produits = ["croissant", "pain", "chocolatine", "gateaux"]
        
class Epicerie:
    def __init__(self):
        self.produits = ["cornichons", "fromage", "papier wc", "pommes", "fraises", "pizza"]
    
class GarsChelou:
    def __init__(self):
        self.produits = ["vase"]
        
def magasiner(magasin, courses):
	panier = []
	for produit in magasin.produits:
		if produit in courses:
			panier.append(produit)
	return panier
        
panier_boulangerie = magasiner(Boulangerie(), liste_de_course)
panier_epicerie    = magasiner(Epicerie()   , liste_de_course)
panier_ruelle      = magasiner(GarsChelou() , liste_de_course)

panier = panier_boulangerie + panier_epicerie + panier_ruelle

print("j''ai acheté:", panier)
