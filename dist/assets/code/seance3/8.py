class Chocolatine:
    def __init__(self):
        print("je suis mangé!")
    
    def nom(self):
        return "CH0C0LA71N3 !!!!!"


cadeau = (Chocolatine(), "Nicolas", "Julian")

#déplier un tuple
objet, destinataire, expediteur = cadeau

#afficher un tuple
print(cadeau)

#fonction qui mange un objet de type: tuple(objet, destinataire, expediteur)
def offrir( truc ):
    liste_des_trucs_offert = []
    
    objet, destinataire, expediteur = truc
    print("-> {} offre {} à {}. Le voici dans le return:".format(expediteur, objet.nom(), destinataire))
    
    return objet

truc_pour_untel = offrir(cadeau)
print(truc_pour_untel)



##exercice avancé##
class Chocolatine:
    def __init__(self):
        print("je suis mangé!")
    
    def nom(self):
        return "CH0C0LA71N3 !!!!!"

cadeau = (Chocolatine, 3, "Nicolas")


def offrir2( truc ):
    liste_des_trucs_offert = []
    
    objet, nombre, destinataire = truc
    for i in range(nombre):
        liste_des_trucs_offert.append(objet())
        
    return liste_des_trucs_offert, destinataire
    
truc_pour_untel, untel = offrir2(cadeau)

print("j'offre {} {} à {}. les voici:".format(cadeau[1], cadeau[0]().nom(), untel), truc_pour_untel)