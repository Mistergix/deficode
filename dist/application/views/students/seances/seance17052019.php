<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="container-fluid below-menu" id="main">
	<div class="container">

		<div class="row white-box">
			<div class="col-12">
				<h1>Javascript</h1>
				<p>
					Il existe plusieurs langages pour le web, tu connais HTML et CSS. Ces deux langages ne sont pas des langages 
					de programmation mais de <b>description</b>. Leur syntaxe est bien différente de Python par exemple.
				</p>
				<p>
					Mais cela ne veut pas dire qu'on ne peut pas programmer dans un site web, il existe d'autres langages. Aujourd'hui nous allons voir le <b>Javascript (JS)</b>.
				</p>
				<p class="warning">
					Il ne faut pas le confondre avec Java, ils ne fonctionnent pas de la même manière !
				</p>
				<p>
					Aujourd'hui, beaucoup considèrent JavaScript comme la technologie la plus importante dans le monde du développement logiciel (sauf Julian !).
				</p>
		</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>On commence</h1>
				<h2>console.log</h2>
				<div class="exercice">
					<p>
						Rends-toi sur <a href="https://es6console.com/" target="_blank" rel="noopener noreferrer">ce lien</a>. Il s'agit d'un éditeur JS.
					</p>
					<p>
						Tape : <code>console.log("Hello World");</code> et exécute en cliquant sur Run en haut à gauche, le résultat s'affiche dans la console en bas :
					</p>
					<div class="col-12 col-md-10 offset-md-1">
                    	<img class="img-fluid" src="<?=img_url("p3/seance2/console", "png");?>" alt="Page de création projet Gitlab">
                	</div>
					<p>
						Tape <code>console.log(1 + 1);</code>
					</p>
					<p>
						Tape <code>console.log(1, "Bibi", 3);</code>
					</p>
				</div>
				<p>
					La syntaxe du JS est proche de celle du Python.
				</p>
				<p class="warning">
					Il faut rajouter des ; à la fin des lignes.
				</p>
				<p>
					Le <code>console.log</code> est semblable au <code>print</code> en Python. On peut afficher plusieurs valeurs en les séparant par des virgules.
				</p>
				<p>
					Les commentaires en Python sont similaires au JS mais on remplace le # par <b>//</b> et ''' ''' par <b>/* */</b>
				</p>
				<h2>Les variables</h2>
				<p>
					En Python pour créer la variable <code>a</code>, valant "Bonjour", on écrivait <code>a = "Bonjour"</code>. En JS, on écrit <code><b>let</b> a = "Bonjour";</code>.
					La seule différence c'est qu'on doit rajouter le mot-clé <b>let</b> avant. Il faut le faire qu'une seule fois au moment où je donne une valeur pour la 1ère fois,
					après je peux utiliser ma variable comme en Python.
				</p>
				<div class="example">
				<div class="code-box">
				<pre>
let a = "Bonjour";
console.log(a);
					</pre>
				</div>
				</div>

				<div class="exercice">
					<p>
						Crée une variable qui contient ton prénom, puis affiche la phrase :
					</p>
					<p>
						"Bonjour PRENOM" (en remplaçant PRENOM par la valeur de ta variable)
					</p>
					<p>
						Crée deux variables, une qui vaut 6 et l'autre 4, puis affiche leur somme.
					</p>
				</div>

				<h2>If else else if</h2>
				<p>
					Pour rappel, voici une condition Python :
				</p>
				<div class="code-box">
					<pre>
if [conditionA] :
	[CodeA]
elif [conditionB] :
	[codeB]
else :
	[codeC]
					</pre>
				</div>
				<p>
					Voici la même condition en JS :
				</p>
				<div class="code-box">
					<pre>
if ( [conditionA] ) {
	[CodeA]
}
else if ( [conditionB] ) {
	[codeB]
}
else {
	[codeC]
}
					</pre>
				</div>
				<p>
					Les différences sont :
				</p>
				<ul>
						<li>Les conditions sont mises entre <b>parenthèses</b></li>
						<li>Les deux points (:) ne sont pas présents</li>
						<li>elif devient <b>else if</b></li>
						<li>Il faut rajouter des accolades ({}) pour entourer les codes à exécuter</li>
				</ul>
				<p>
					Pour faire des accolades tu fais <kbd>AltGr + '</kbd> et <kbd>AltGr + =</kbd>.
				</p>
				<p>
					Les symboles de comparaisons sont similaires à ceux de Python :
				</p>
				<ul>
					<li><code>a === 15</code> : a est-il égal à 15 ? <b> Il y a 3 "="</b></li>
					<li><code>a !== 15</code> : a est-il différent de 15 ? <b> Il y a 2 "="</b></li>
					<li><code>a &lt; 15</code> : a est-il <strong>strictement</strong> plus petit que 15 ?</li>
					<li><code>a &lt;= 15</code> : a est-il inférieur ou égal à 15 ?</li>
					<li><code>a &gt; 15</code> : a est-il <strong>strictement</strong> plus grand que 15 ?</li>
					<li><code>a &gt;= 15</code> : a est-il supérieur ou égal à 15 ?</li>
				</ul>
				<p>
					Pour combiner des conditions, on utilise les opérateurs :
				</p>
				<ul>
					<li><code>&amp;&amp;</code> pour faire un ET (en Python c'est <code>and</code>)</li>
					<li><code>||</code> pour faire un OU (en Python c'est <code>or</code>)</li>
					<li><code>!</code> pour faire un NON (en Python c'est <code>not</code>)</li>
				</ul>
				<p>
					Pour faire des | tu fais <kbd>AltGr + -</kbd>.
				</p>
				<div class="exercice">
					<p>
						Ecris un programme qui crée une variable <code>note</code>.
					</p>
					<p>
							Le programme affiche :
					</p>
					<ul>
						<li>"Recalé" si la note est plus petite que 10 <b>strictement</b></li>
						<li>"Passable" si elle est comprise entre 10 et 12</li>
						<li>"Mention" sinon</li>
					</ul>
				</div>
				<h2>Les boucles</h2>
				<p>
					Pour rappel, en Python, pour écrire des boucles <code>for</code> et <code>while</code>, on écrit :
				</p>
				<div class="code-box">
					<pre>
while [condition] :
	[code]

for compteur in range(5, 15, 3):
	[code]
					</pre>
				</div>
				<p>
					Voici les mêmes boucles en JS :
				</p>
				<div class="code-box">
					<pre>
while ( [condition] ) {
	[code]
}

for(let compteur = 5; compteur < 15; compteur += 3) {
	[code]
}
					</pre>
				</div>
				<p>
					Pour la boucle while, les différences sont les mêmes que pour le <code>if</code>.
				</p>
				<p>
					Pour la boucle for c'est une autre histoire ! On retrouve les accolades et parenthèses.
				</p>
				<p>
					Dans les parenthèses il y a trois choses, séparées par des ; 
				</p>
				<ol>
					<li><code>let compteur = 5</code>, crée la variable compteur et l'initialise à la valeur de départ</li>
					<li><code>compteur < 15</code>, indique qu'on continue tant qu'on est plus petit que la valeur d'arrivée</li>
					<li><code>compteur += 3</code>, met à jour la variable compteur en lui rajoutant 3 à chaque étape</li>
				</ol>
				<p>
					<code>range(5, 15, 3)</code> devient (let compteur = 5; compteur < 15; compteur += 3)<code></code>
				</p>
				<p>
					Comme en Python, on peut mettre plusieurs boucles les unes dans les autres, il faut penser à changer le nom de la variable dans la boucle interne !
				</p>

				<div class="exercice">
					<p>
						Crée un programme qui affiche les tables de multiplications de 3 à 12 (incluse), en utilisant un for dans l'autre. Voici ce qu'il doit afficher :
					</p>
					<div class="col-12 col-md-10 offset-md-1">
                    	<img class="img-fluid" src="<?=img_url("p3/seance2/multi", "png");?>" alt="Page de création projet Gitlab">
                	</div>
				</div>

				<h2>Les fonctions</h2>
				<p>
					Voici comment on fait une fonction en Python :
				</p>
				<div class="code-box">
					<pre>
def [nom de fonction] ([argument1], [argument2], ...) :
	[code]

# Appel de la fonction
[nom de fonction] ([argument1], [argument2], ...)
					</pre>
				</div>
				<p>
					Voici la même fonction en JS :
				</p>
				<div class="code-box">
					<pre>
function [nom de fonction] ([argument1], [argument2], ...) {
	[code]
}

// Appel de la fonction
[nom de fonction] ([argument1], [argument2], ...);
					</pre>
				</div>
				<p>
					On retrouve les accolades du if et du while, et on remplace le mot clé <code>def</code>
					par <code><b>function</b></code>. L'appel est identique. On peut aussi utiliser le <b>return</b> de la même manière.
				</p>
				<div class="exercice">
					<p>
						Ecris et appelle (utilise) une fonction qui prends 2 nombres en arguments et renvoie le plus grand des deux.
					</p>
				</div>
		</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
			<h1>Avance-toi</h1>
			<p>
				Si tu veux maîtriser le JS entièrement, tu peux te rendre sur ces deux liens. Le premier est en anglais, il détaille beaucoup. Le deuxième est en français un peu moins détaillé.
			</p>
			<p>
				<a href="https://eloquentjavascript.net/" target="_blank" rel="noopener noreferrer">Lien EN</a> -- <a href="https://fr.eloquentjavascript.net/contents.html" target="_blank" rel="noopener noreferrer">Lien FR</a>.
			</p>
			<p>
				Voici le site de la W3School, la mine d'or pour apprendre le web : <a href="https://www.w3schools.com/js/" target="_blank" rel="noopener noreferrer">Lien</a>.
				Tu peux changer la langue en cliquant sur le globe en haut à droite.
			</p>
			</div>
		</div>

	</div>
</main>
