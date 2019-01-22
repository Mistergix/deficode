<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
  <div class="container">
	
	
		<div class="row  white-box">
				<div class="col-12">
					<h1>Les listes <code>List</code></h1>
					<p>
						On a vu que l'on peut stocker des informations dans des variables.
					</p>
          <p>
            Mais que faire si l'on veut écrire les courses de la semaine en Python? <br>
            Une variable par chose à acheter? ça deviendrait ingérable rapidement.
          </p>
          <p>
            Python nous propose la même solution que dans la vraire vie: LA LISTE
          </p>
					<div class="example">
						<div class="code-box">
							<pre>
liste_de_course = ["fromage", "gateaux", "fraises", "croissant", "papier wc", "vase", "pain"]
							</pre>
						</div>
					</div>
          <p>
            Celle-ci peut contenir toutce que l'on veut:
            <li>Des chaines de caractères</li>
            <li>Des nombres</li>
            <li>Des instances de classes</li>
            <li>Et tout ce qui est une objet python en général</li>
          </p>
  				<div class="example">
						<div class="code-box">
							<pre>
liste_de_course = ["fromage", "gateaux", "fraises", "croissant", "papier wc", "vase", "pain"]
							</pre>
						</div>
					</div>
          <p>
            
          </p>
					<div class="exercice">
					</div>
					<h2>Listes et indices</h2>
          <p class="warning">
  						L'indices i doit être inférieur à la longueur de la liste !
					</p>
  				<div class="example">
						<div class="code-box">
							<pre>
"""code python"""
							</pre>
						</div>
					</div>
					<div class="exercice">
					</div>
          <h2>Listes et boucle <code>for</code></h2>
          <div class="example">
						<div class="code-box">
							<pre>
"""code python"""
							</pre>
						</div>
					</div>
					<div class="exercice">
					</div>
          <h2>Listes et fonctions usuelles</h2>
          <div class="example">
  					<div class="code-box">
							<pre>
"""code python"""
							</pre>
						</div>
					</div>
					<div class="exercice">
					</div>
				</div>
			</div>
			
			<div class="row white-box">
				<div class="col-12">
					<h1>Les tuples <code>tuple</code></h1>
          <div class="example">
  					<div class="code-box">
							<pre>
"""code python"""
							</pre>
						</div>
					</div>
					<div class="exercice">
					</div>
				</div>
			</div>

			<div class="row white-box">
				<div class="col-12">
					<h1>La boucle <code>while</code></h1>
          <div class="example">
  					<div class="code-box">
							<pre>
"""code python"""
							</pre>
						</div>
					</div>
					<div class="exercice">
					</div>
				</div>
			</div>
			
			<div class="row white-box">
				<div class="col-12">
					<h1>L'aléatoire avec <code>random</code></h1>
          <div class="example">
  					<div class="code-box">
							<pre>
"""code python"""
							</pre>
						</div>
					</div>
					<div class="exercice">
					</div>
				</div>
			</div>
			
			<div class="row white-box">
				<div class="col-12">
					<h1>Le retour des fonctions: mot clef <code>return</code></h1>
          <div class="example">
  					<div class="code-box">
							<pre>
"""code python"""
							</pre>
						</div>
					</div>
					<div class="exercice">
					</div>
				</div>
			</div>
			
<!-- ::example:: -->
			<div class="row white-box">
				<div class="col-12">
					<p class="warning">
							Tout comme on peut faire des fautes en français, on peut faire des fautes en Python !
					</p>
					<p class="example">
						mon_programme.py
					</p>
					<div class="exercice">
						<p>
							Ouvre <?= $editor; ?>.
						</p>
						<p>
							Crée un fichier <span class="file">turtle_introdution.py</span>.
						</p>
						<p>
							Tape le code suivant et exécute-le :
						</p>
						<div class="code-box">
							<pre>
import turtle as trt

trt.forward(50)
trt.right(90)
trt.backward(50)
trt.left(90)

trt.done()
							</pre>
						</div>
						<p>
							Que font les commandes <code>trt.forward</code>, <code>trt.backward</code>, <code>trt.left</code> et <code>trt.right</code> ?
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>