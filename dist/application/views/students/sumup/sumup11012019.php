<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
	<div class="container">
	<div class="row  white-box">
			<div class="col-12">
			<h1>Récap' de la séance 1</h1>
			</div>
	</div>
		<div class="row  white-box">
			<div class="col-12">
				<h1>Python, c'est quoi ?</h1>
				<p>
					Python est un <strong>langage de programmation</strong>.
				</p>
				<p>
					Un langage de programmation permet de parler avec l'ordinateur.
				</p>
				<p class="warning">
					Tout comme on peut faire des fautes en français, on peut faire des fautes en Python !
				</p>
				<p>
					Les fichiers Python se terminent en <strong>.py</strong>, n'ont pas d'accents et d'espaces.
				</p>
				<p class="example">
					mon_programme.py
				</p>
			</div>
		</div> <!-- END ROW -->
		<div class="row  white-box">
			<div class="col-12">
				<h1>Turtle</h1>
				<p>
					On va utiliser le module <strong>turtle</strong> de Python.
				</p>
				<p>
					Les commandes <code>trt.forward</code>, <code>trt.backward</code>, <code>trt.left</code> et <code>trt.right</code> permettent de bouger la tortue.
				</p>
				<p>
					Pour pouvoir utiliser turtle, on écrit la ligne <code>import turtle as trt</code>.
				</p>
				<p>
					Quand on utilise turtle, il faut toujours <strong>terminer</strong> le programme par <code>trt.done()</code>.
				</p>
			</div>
		</div> <!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Les variables</h1>
				<p>
					Une variable est une boîte nommée, qui contient une valeur.
				</p>
				<p class="example">
					La variable <code>age</code> contient la valeur 15.
				</p>
				<p>
					En Python, pour créer la variable <code>age</code> qui contient 15, on écrit :
				</p>
				<div class="code-box">
					<pre>
age = 15
					</pre>
				</div>
				<p>
					La syntaxe est :
				</p>
				<div class="code-box">
					<pre>
[nom de variable] = [valeur]
					</pre>
				</div>
				<p class="warning">
					Les noms que l'on donne aux variables ne doivent <strong>PAS</strong> contenir d'accents ou d'espaces.
				</p>
			</div>
		</div> <!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Les opérations</h1>
				<p>
					Python peut additioner, soustraire, multiplier et diviser des variables et nombres grâce aux opérateurs :
				</p>
				<ul>
					<li><code>+</code></li>
					<li><code>-</code></li>
					<li><code>*</code></li>
					<li><code>/</code></li>
				</ul>
				<p>
						On peut utiliser <code>+=</code>, <code>-=</code>, <code>*=</code>, et <code>/=</code> pour rajouter, soustraire, multiplier et diviser une variable par une certaine valeur.
				</p>
				<p class="example">
					<code>a *= 2</code> multiplie <code>a</code> par 2 et met à jour la variable.
				</p>
			</div>
		</div><!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Répéter du code (boucle for)</h1>
				<p>
				La boucle for permet de <strong>répéter</strong> un certain nombre de fois.
				</p>
				<p>
					La syntaxe est :
				</p>
				<div class="code-box">
					<pre>
for [variable] in range([nombre de fois à répéter]) :
	[code]
					</pre>
				</div>
				<p class="warning">
					Il ne faut pas oublier de <strong>décaler</strong> après la ligne du for. 
					Ceci est très important car cela indique quelle partie du code répéter, et 
					quelle partie du code ne pas répéter.
				</p>
			</div>
		</div><!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Les comparaisons</h1>
				<p>
				<code>==</code>, <code>!=</code>, <code>&lt;</code>, <code>&lt;=</code>, <code>&gt;</code> et <code>&gt;=</code> sont
				des comparateurs. Ils permettent de comparer des choses entre elles.
				</p>
				<ul>
					<li><code>a == 15</code> : a est-il égal à 15 ?</li>
					<li><code>a != 15</code> : a est-il différent de 15 ?</li>
					<li><code>a &lt; 15</code> : a est-il <strong>strictement</strong> plus petit que 15 ?</li>
					<li><code>a &lt;= 15</code> : a est-il inférieur ou égal à 15 ?</li>
					<li><code>a &gt; 15</code> : a est-il <strong>strictement</strong> plus grand que 15 ?</li>
					<li><code>a &gt;= 15</code> : a est-il supérieur ou égal à 15 ?</li>
				</ul>
			</div>
		</div><!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Les structures conditionnelles (if, elif, else)</h1>
				<p>
					<strong>if</strong>, <strong>elif</strong>, <strong>else</strong> permettent de dire <strong>si</strong>, 
					<strong>sinon si</strong> et <strong>sinon</strong> en Python.
				</p>
				<p>
					La syntaxe est :
				</p>
				<div class="code-box">
					<pre>
if [condition] :
	[code]
elif [autre condition] :
	[autre code]
else :
	[encore un autre code]
					</pre>
				</div>
				<p class="warning">
					Encore une fois, attention à l'indentation (le décalage).
				</p>
				<p class="warning">
					On ne peut avoir qu'<strong>un</strong> else, mais autant de elif que l'on veut.
				</p>
			</div>
		</div> <!-- END ROW -->
		<div class="row white-box">
			<div class="col-12">
				<h1>Les fonctions</h1>
				<p>
					Les <strong>fonctions</strong> permettent de définir une action que l'ordinateur doit faire, de <strong>nommer</strong>
					cette action et de la <strong>paramétrer</strong>.
				</p>
				<p>
					1) Pour commencer, il faut dire à l'ordinateur <strong>comment</strong> faire l'action. 
					C'est la <strong>définition</strong> de la fonction.
				</p>
				<p>
					2) Puis on demande à l'ordinateur de <strong>faire</strong> l'action. C'est <strong>l'appel</strong> de la fonction.
				</p>
				<p>
					La syntaxe de la définition est :	
				</p>
				<div class="code-box">
					<pre>
def [nom de la fonction] ([argument1], [argument2], [...]):
	[code à exécuter]
					</pre>
				</div>
				<p>
					La syntaxe de l'appel est :	
				</p>
				<div class="code-box">
					<pre>
[nom de la fonction] ([argument1], [argument2], [...])
					</pre>
				</div>
			</div>
		</div><!-- END ROW -->
	</div>
</main>
