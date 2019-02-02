<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
	<div class="container">
		<div class="row white-box">
			<div class="col-12">
				<h1>Les tuples <code>tuple</code></h1>
          		<p>
					Un tuple se comporte comme à liste à trois exceptions prêt:
				</p>
            	<ul>
					<li>Il est encadré par des parenthèses ( ) et non des crochets [ ]</li>
					<li>Il ne peut pas changer de longueur</li>
					<li>On ne peut pas changer ses élements</li>
				</ul>
        		<div class="example">
            		<p>
						Le tuple est ici composé de 3 éléments désignant la position d'un avion
            		</p>
    				<div class="code-box">
						<pre>
position = (11.0, 1100.2, 45.2)
						</pre>
					</div>
				</div>
				<p>
					On peut décomposer un tuple :
				</p>
				<div class="example">
    				<div class="code-box">
						<pre>
x, y, z = position
						</pre>
					</div>
				</div>
				<p class="warning">
					Il doit y avoir <b>autant de variables à gauche que d'éléments dans le tuple</b> pour que cela fonctionne.
    			</p>
            	<p>
            		On souhaite faire descendre l'avion de 1.0 mètre.
            	</p>
            	<p>
            		Pour modifier une valeur dans un tuple, 
            		on est obligé de refaire un nouveau tuple:
            	</p>
				<div class="example">
    				<div class="code-box">
						<pre>
x, y, z = position
y = y - 1
position = (x, y, z)
print(position)
						</pre>
					</div>
				</div>
				<div class="exercice">
					<p>
						Complète ce code (remplace les ???) pour que la fonction <code>impots(argent)</code> retourne 
						l'argent qu'il reste après la collecte des impôts et l'argent qui a été collecté.
					</p>
					<div class="code-box">
						<pre>
def impots(argent):
	taxe_pourcent = 33

	collecte = argent * (taxe_pourcent / 100)
	
	il_reste_ca = argent - ???
	
	return (???, collecte)


il_reste_ca, ??? = impots(1000)	
print("il me reste {} €! {}€ ont été pris.".format(???, ???))
						</pre>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
