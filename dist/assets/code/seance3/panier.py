class Boulangerie:
    def __init__(self):
        self.produits = ["croissant", "pain"]
        
class Epicerie:
    def __init__(self):
        self.produits = ["cornichons", "pizza"]
        
def magasiner(magasin, courses):
	panier = []
	for produit in magasin.???:
		if produit in ???:
			panier.???(???)
	return ???

mon_panier = []
liste_de_courses = ["croissant", "pain", "pizza", "cornichons"]
        
panier_boulangerie = magasiner(Boulangerie(), liste_de_courses)
panier_epicerie    = magasiner(Epicerie(), liste_de_courses)

mon_panier = panier_boulangerie + panier_epicerie

print("j'ai acheté : ", panier)
