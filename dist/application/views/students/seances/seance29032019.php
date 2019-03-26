<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- 
	Yo Julian :D
	Voilà ce qu'il faut faire, j'ai rajouté les trucs qu'on na pas eu le temps de faire avant :)
	Pour créer des exos, tu peux t'inspirer du site objectif (http://deficode.parkours.fr/index.php/templates/template/objectif)
-->

<main class="container-fluid below-menu" id="main">
	<div class="container">

		<div class="row white-box">
			<div class="col-12">
				<h2>Les bordures</h2>
				<p>
					On peut rajouter des bordures autour d'éléments grâce à la propriété <code>border</code>.
				</p>
				<p>
					Le format est le suivant : <code>border : [epaisseur] [style] [couleur];</code>.
				</p>
				<p>
					L'épaisseur est en <b>px</b> (pixels).
				</p>
				<p>
					Le style est à piocher parmi : dotted - dashed - solid - double - groove - ridge - inset - outset - none - hidden.
				</p>
				<div class="example">
					<p>
						Mes <code>p</code> auront une bordure bleue, entière de 3px d'épaisseur.
					</p>
					<div class="code-box">
						<pre>
p {
	border : 3px solid rgb(80, 209, 6);
}
						</pre>
					</div>
				</div>
				<p class="exercice">
					Rajoute ce style dans ton css. Remplace solid par dotted, inset etc.
				</p>
				<p>
					On peut remplacer <code>border</code> par <code>border-left</code>, <code>border-right</code>, <code>border-top</code>, <code>border-bottom</code> 
					pour ajouter des bordures seulement à gauche, à droite etc.
				</p>
				<p>
					Enfin, on peut ajouter <code>border-radius</code> pour arrondir les angles. Sa valeur est en px.
				</p>
				<div class="example">
					<div class="code-box">
						<pre>
p {
	border-left : 3px solid rgb(5, 202, 187);
	border-right : 3px dashed rgb(80, 209, 6);
	border-top : 3px solid rgb(209, 6, 70);
	border-bottom : 3px dashed rgb(59, 73, 155);
	border-radius : 10px;
}
						</pre>
					</div>
				</div>
				<p class="exercice">
					Teste ce css.
				</p>

				<h2>Manipulation de texte</h2>
				<p>
					On peut manipuler du texte à travers (notament) ces propriétés :
				</p>
				<ul>
					<li><code>text-align</code> : alignement du texte. Valeurs : <code>left</code>, <code>right</code>, <code>center</code>, <code>justify</code></li>
					<li><code>text-decoration</code> : pour surligner, souligner ou barrer du texte, ou ne rien mettre. Valeurs : <code>overline</code>, <code>underline</code>, <code>line-through</code>, <code>none</code></li>
					<li><code>font-style</code> : utilisé pour l'italique. Valeurs : <code>italic</code>, <code>normal</code></li>
					<li><code>font-weight</code> : utilisé pour le gras. Valeurs : <code>bold</code>, <code>normal</code></li>
					<li><code>font-size</code> : utilisé pour la taille du texte. Valeurs : en px (16px par défaut)</li>
				</ul>
				<div class="example">
					<div class="code-box">
						<pre>
p {
	text-align: right;
	text-decoration: line-through;
	font-style: italic;
	font-weight: bold;
	font-size: 50px;
}
						</pre>
					</div>
				</div>
				<p class="exercice">
					Teste ce css.
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les polices de caractères</h1>
				<p>
				<!-- 
					TODO : 
					- Expliquer rapidement ce qu'est une police 
					- Leur montrer la propiété CSS font-family avec quelques polices : Helvetica, Arial etc.
					- Leur montrer comment marche Google fonts ( choix d'une ou plusieurs polices, insertion de la 
					balise <link>, utilisation dans le CSS)
				-->
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les balises div</h1>
				<p>
				<!-- 
					TODO : 
					- Leur expliquer que pour créer un site, on doit ranger chaque élément dans div
					- Leur montrer une photo d'un site sur lesquels les div sont entourés
					- leur parler de la balise div
				-->
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>La taille des éléments</h1>
				<p>
				<!-- 
					TODO : 
					- propriétés css : min-width, width, max-width (idem pour height)
					- unités : rem (pas em) et %
					- Tu peux les faire jouer avec l'inspecteur d'éléments (et background color pour bien montrer le truc)
				-->
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Padding et margin</h1>
				<p>
				<!-- 
					TODO : 
					- Différence entre margin et padding
					- padding : x; padding : x y; padding : a b c d; (idem pour margin)
					- Tu peux les faire jouer avec l'inspecteur d'éléments (et background color pour bien montrer le truc)
				-->
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les balises HTML 5</h1>
				<p>
				<!-- 
					TODO : 
					- Parler de main, section, nav, header, footer et article (les présenter très vite fait)
				-->
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>On commence le site projet</h1>
				<p>
				<!-- 
					TODO : 
					- Leur montrer une photo de la page objectif (http://deficode.parkours.fr/index.php/templates/template/objectif) où 
					les éléments sont entourés avec les bonnes balises (section, nav, div, etc.) 
					et leur demander de reproduire la structure en HTML
				-->
				</p>
			</div>
		</div>

	</div>
</main>
