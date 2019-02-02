<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main class="container-fluid" id="main">
  <div class="container">
  <div class="row  white-box">
			<div class="col-12">
			<h1>Récap' de la séance 3</h1>
			</div>
	</div>
		<div class="row white-box">
			<div class="col-12">
				<h1>Le retour des fonctions: mot clef <code>return</code></h1>
        <p>
          Le mot clef <code>return</code> peut servir à arrêter une fonction.
				</p>
        <p>
          Il n'est pas obligatoirement en fin de fonction.
        </p>
		<p>
			On peut faire remonter des informations en plaçant une expression après <code>return</code>.
		</p>
        <div class="example">
        <p>
          On peut retourner un élément:
        </p>
					<div class="code-box">
						<pre>
def asterisque():
  return 42

code = asterisque()

print(code)
						</pre>
					</div>
				</div>
      </div>
		</div>

		<div class="row white-box">
			<div class="col-12">
					<h1>Les listes</h1>
					<p>
						On a vu que l'on peut stocker des informations dans des variables.
					</p>
          <p>
            Mais que faire si l'on veut écrire les courses de la semaine en Python? <br>
            Une variable par chose à acheter? Ça deviendrait ingérable rapidement.
          </p>
          <p>
            Python nous propose la même solution que dans la vraire vie: LA <strong>LISTE</strong> !
          </p>
					<div class="example">
          <p>
            On peut créer des listes déjà remplies:
          </p>
						<div class="code-box">
							<pre>
liste_de_course = ["fromage", "gateaux", "fraises", "croissant", "papier wc", "vase", "pain"]
							</pre>
						</div>
            <p>
              Mais aussi créer des listes vides:
            </p>
  					<div class="code-box">
							<pre>
liste_vide = []
							</pre>
						</div>
					</div>
          <p>
            Celle-ci peut contenir tout ce que l'on veut:
          </p>
					<ul>
            <li>Des chaînes de caractères</li>
            <li>Des nombres</li>
            <li>Des instances de classes</li>
            <li>Et tout ce qui est une objet Python en général</li>
            </ul>
  				<div class="example">
						<div class="code-box">
							<pre>
def f():
  print("je suis f")

class Chien:
  def __init__(self):
    print("wouf")

tas = ["camembert", Chien, 42, True, [0, "cocotier"], f, "pain"]
							</pre>
						</div>
            <p>
              Ici, le 5e élément de <code>tas</code> est une liste,
              le 2e élément de <code>tas</code> est une classe, et
              le 6e élément de <code>tas</code> est une fonction.
            </p>
					</div>
          <p>
            Les listes peuvent aussi être collées les unes à la suite des autres avec les opérateurs + et * :
          </p>
					</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
					<h1>Listes et indices</h1>
					<p>
            Les listes, c'est encore meilleur quand on les utilise pour y faire ranger des informations non pas par nous
            mais par Python directement !
          </p>
          <p>
            On peut accéder à chaque élément de la liste avec ce que l'on appelle son <b>indice</b>.
            Il s'agit en fait de sa position dans la liste...
          </p>
          <p class="warning">
    					En python, le premier élément est d'indice 0
          </p>
    			
          <p class="warning">
  						L'indice <code>i</code> doit être inférieur <b>strictement</b> à la longueur de la liste !
					</p>
  				<div class="example">
						<div class="code-box">
							<pre>
ma_liste = [13, 4, 7]
print(ma_liste[3])
							</pre>
						</div>
            <p>
              Ce code génère une erreur... car la liste ne contient que 3 éléments.
            </p>
            <p>
              L'indice max de cette liste <code>ma_liste</code> est en effet <code>2</code> !
            </p>
					</div>
          </div>
		</div>

		<div class="row white-box">
			<div class="col-12">
          <h1>Listes et boucle <code>for</code></h1>
          <p>
            L'accès par indice est très utile pour parcourir une liste avec une boucle <code>for</code>
          </p>
          <p>
            Python propose aussi un raccourci lorsque l'on a besoin uniquement de la valeur sans l'indice avec <code>for [element] in [liste] :</code>.
          </p>
					</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
          <h1>Listes et fonctions usuelles</h1>
					<p>
            Allons maintenant nous munir de fonctions pour manipuler les listes.
          </p>
					<ul>
						<li><code>liste<b>.append(x)</b></code> permet d'ajouter un nouvel élément
								<code>x</code> à la fin de la liste.</li>
						<li>
								<code>liste<b>.remove(x)</b></code> permet de retirer le premier élément
								<code>x</code> de la liste.
							</li>
							<li>
						Le mot-clé <code>in</code> permet de vérifier si un élément est dans la liste.
            </li>
						<li>
						<code>liste<b>.insert(i, x)</b></code> permet d'insérer un nouvel élément
              <code>x</code> à la position <code>i</code> dans la liste.
              L'élément qui était alors en <code>i</code> se retrouve en <code>i+1</code>
						</li>
						<li><code>liste<b>.pop(i)</b></code> retirer l'élément en position <code>i</code> et elle le renvoit.
						<li>
						<code><b>len(liste)</b></code> permet d'obtenir le nombre d'éléments de la liste.
						</li>
						<li>
						<code><b>len(liste) - 1</b></code> est donc le dernier indice de la liste.
						</li>
						<li><code><b>liste[i : j]</b></code> permet de tronquer la liste en ne gardant que les éléments de
              <code>liste[i]</code> à <code>liste[j-1]</code>.</li>
					</ul>
				</div>
			</div>

			<div class="row white-box">
					<div class="col-12">
						<h1>Les nombres flottants</h1>
						<p>
							Un nombre flottant est un nombre à virgule.
						</p>
						<p class="warning">
							En Python, on remplace la virgule par un point !
						</p>
					</div>
			</div>

			<div class="row white-box">
				<div class="col-12">
					<h1>L'aléatoire avec <code>random</code></h1>
          <p>
            Random veut dire aléatoire en anglais.
          </p>
          <p>
            Ce module permet de faire faire à l'ordinateur des actions nécessitant du hasard.
          </p>
          <p>
            On utilise souvent des fonctions pratiques dans nos programmes, ça permet de gagner du temps:
          </p>
          <p>
            La fonction <code>rnd.randint(min, max)</code> retourne un entier aléatoirement entre <code>min</code> inclus et <code>max</code> inclus
          </p>
          <p>
            La fonction <code>rnd.choice(liste)</code> retourne un élément aléatoire de la liste!
          </p>
          <p class="warning">
  						<code>liste</code> ne doit pas être vide! C'est à dire que: <code>liste != []</code>
					</p>
				</div>
			</div>

  		<div class="row white-box">
				<div class="col-12">
					<h1>La boucle <code>while</code></h1>
					<p>
						La boucle <code>while</code> permet de répéter du code <strong>tant que</strong> une certaine condition est vraie.
					</p>
				</div>
			</div>

			<div class="row white-box">
					<div class="col-12">
						<h1>Les commentaires</h1>
						<p>
							On peut rajouter des commentaires, c'est à dire du texte que Python ignore de 2 façons :
						</p>
						<div class="example">
							<div class="code-box">
								<pre>
# Avec un hashtag (Alt Gr + 3)

"""
Ou avec 3 guillemets les uns à la suite des autres
Tout ce qui est entre est ignoré par Python
"""
								</pre>
							</div>
						</div>
					</div>
        </div>
				<div class="row white-box">
						<div class="col-12">
							<h1>Les assertions</h1>
							<p>
								Les assertions permettent de renvoyer une erreur personnalisée si une condition est vérifiée.
							</p>
							<div class="example">
								<div class="code-box">
									<pre>
diviseurs = [3, 4, 5, 0, 2]

for diviseur in diviseurs :
		assert diviseur != 0, "Le diviseur ne peut pas être zéro"
		print(120 / diviseur)

									</pre>
								</div>
							</div>
						</div>
					</div>
		</div>
	</div>
</main>
