<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
	<div class="container">
		<div class="row  white-box">
				<div class="col-12">
					<h1>Les chaînes de caractères et la commande <code>print</code></h1>
					<p>
						On a vu que l'on peut stocker des nombres dans des variables.
					</p>
					<p>
						On peut aussi stocker des phrases. En informatique, une phrase est appelée une <strong>chaîne de caractères</strong>
						ou une <strong>string</strong>.
					</p>
					<p>
						En Python, les strings sont entourées du symbole <strong>"</strong> (sur la touche 3 du clavier).
					</p>
					<div class="example">
					<div class="code-box">
						<pre>
phrase = "Bonjour je m'appelle Nicolas."
						</pre>
					</div>
					</div>
					<p class="warning">
						Les guillemets sont importants. On met des guillemets parce que Python ne connait pas les mots tels que bonjour et je.
					</p>
					<p>
						On peut changer dynamiquement des strings grâce à la commande <code>format</code>.
					</p>
					<p>
						La commande <code>print</code> permet d'afficher une expression à l'écran (une variable, un nombre etc.).
					</p>
					<div class="exercice">
						<p>
							Testons tout ça ! Recopie et exécute le code suivant :
						</p>
					<div class="code-box">
						<pre>
a = 15
b = 5

print(a + b)
	
age = 20
jaime = "chats"
phrase = "Bonjour je m'appelle Nicolas. J'ai {} ans et j'aime les {}".format(age, jaime)

print(phrase)
						</pre>
					</div>
					<p>
						A quoi servent les {} ?
					</p>
					<p>
						Comment utilise-t-on <code>format</code> ?
					</p>
					<p>
						Comment utilise-t-on <code>print</code> ?
					</p>
					</div>
				</div>
			</div> <!-- END ROW -->
			<div class="row white-box">
				<div class="col-12">
					<h1>Les booléens</h1>
					<p>
						On a vu qu'on peut mettre des nombres et des string dans des variables.
					</p>
					<p>
						On peut aussi y mettre des <strong>booléens</strong>.
					</p>
					<p>
						Un booléen permet de dire si quelque chose est vrai ou faux. Il ne peuvent donc avoir que deux valeurs : <strong>True</strong>
						et <strong>False</strong>.
					</p>
					<p class="warning">
						Certaines expressions peuvent être des booléens cachés : 15 < 16 est une comparaison, qui vaut True.
					</p>
					<div class="exercice">
						<p>
							Teste les programmes suivants :
						</p>
					<div class="code-box">
						<pre>
monstreEstVivant = True
jaiMonPermis = False

print(monstreEstVivant)
print(jaiMonPermis)
						</pre>
					</div>
					<div class="code-box">
						<pre>
a = 15 <= 16
b = 12 == 14

print(a)
print(b)
						</pre>
					</div>
					</div>
					<p>
					On peut combiner les booléens ensembles grâce aux mots-clés <code>and</code>, <code>or</code> et <code>not</code>.
				</p>
				<div class="exercice">
						<p>
							Teste les programmes suivants :
						</p>
					<div class="code-box">
						<pre>
permis = True
plusDe18Ans = True

if permis and plusDe18Ans:
	print("Je peux conduire")
else :
	print("Je ne peux pas conduire")

						</pre>
					</div>
					<div class="code-box">
						<pre>
roi = True
trefle = True

if roi or trefle:
	print("J'ai un roi ou un trèfle (ou les DEUX)")
else :
	print("Je n'ai pas de roi et pas de trèfle")

						</pre>
					</div>
					<div class="code-box">
						<pre>
perdu = False

if not perdu:
	print("Je n'ai pas perdu")
else :
	print("J'ai perdu")

						</pre>
					</div>
					</div>
				</div>
			</div><!-- END ROW -->
	</div>
</main>
