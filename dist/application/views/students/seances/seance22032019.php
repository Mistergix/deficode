<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
	<div class="container">

		<div class="row white-box">
			<div class="col-12">
				<h1>Les images</h1>
				<p>
					Grâce au HTML, on peut intégrer des images dans sa page web. 
					Il y a 3 types d'images supportées par tous les navigateurs :
				</p>
				<ul>
					<li>Les JPEG : Utilisées pour les photos (extension : .jpg ou .jpeg)</li>
					<li>Les GIF : connus pour être des images animées (extension : .gif)</li>
					<li>Les PNG : pour tout ce qui n'est pas une photo, on peut créer des images transparentes avec (extension : .png)</li>
				</ul>
				<p>
					La balise pour intégrer une image est la balise <code>img</code>. C'est une balise <b>orpheline</b>. Voici le format :
				</p>
				<p>
					<code>&lt;img src="[lien]" alt="[texte_alternatif]"&gt;</code>
				</p>
				<p>
					L'attribut <code>alt</code> contient une petite description de l'image. C'est important car si l'image n'existe pas, c'est cette description qui s'affiche.
				</p>
				<p>
					L'attribut <code>src</code> indique l'endroit ou se trouve l'image. Comme pour <code>href</code>, on peut y mettre un chemin absolu ou relatif.
				</p>
				<p class="example">
					<code>&lt;img src="mes_images/animaux/gerbille.jpg" alt="Image d'une gerbille dans le désert"&gt;</code>
				</p>

				<div class="exercice">
					<p>
						Dans ton dossier <span class="file">monsite</span>, crée un nouveau dossier appelé <span class="file">images</span>.
					</p>
					<p>
						Télécharge ces 3 images et place les dans ce dossier :
					</p>
					<ul>
						<li><a href="<?=img_url("seance8/sucre", "jpg")?>" download="sucre.jpg">Image JPEG</a></li>
						<li><a href="<?=img_url("seance8/earth", "gif")?>" download="terre.gif">Image GIF</a></li>
						<li><a href="<?=img_url("seance8/moodboard")?>" download="moodboard.png">Image PNG</a></li>
					</ul>
					<p>
						Dans ton fichier <span class="file">index.html</span>, intègre ces 3 images avec des 3 balises <code>img</code>. Utilise un chemin relatif et mets des descriptions.
					</p>
					<p>
						Rajoute ceci à la suite de tes images : <code>&lt;img src="image_qui_nexiste_pas.png" alt="Une image qui n'existe pas"&gt;</code>
					</p>
					<p>
						Regarde le résultat dans ton navigateur.
					</p>
				</div>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les éléments blocks et inline</h1>
				<p>
					Il y a deux types de balises : les blocks et les inlines.
				</p>
				<p>
					La différence entre les deux est la "place" qu'elles prennent.
				</p>
				<p>
					Les balises blocks prvoquent un retour à la ligne, tandis que les balises inline n'en provoquent pas.
				</p>
				<p class="example">
					Les balises <code>a</code> et <code>img</code> sont inlines, tandis que les balises <code>h1</code> et
					<code>p</code> sont blocks.
				</p>
				<div class="exercice">
					<p>
						Efface le contenu du <code>body</code> de <span class="file">index.html</span>.
					</p>
					<p>
						Remplace-le par :
					</p>
					<div class="code-box">
						<pre>
&lt;a href="page.html"&gt;Lien&lt;/a&gt;
&lt;a href="page.html"&gt;Lien&lt;/a&gt;
&lt;a href="page.html"&gt;Lien&lt;/a&gt;
&lt;a href="page.html"&gt;Lien&lt;/a&gt;

&lt;p&gt;Paragraphe 1&lt;/p&gt;
&lt;p&gt;Paragraphe 2&lt;/p&gt;
&lt;p&gt;Paragraphe 3&lt;/p&gt;
&lt;p&gt;Paragraphe 4&lt;/p&gt;
						</pre>
					</div>
					<p>
					Tu remarques que les liens sont côtes à côtes, tandis que les paragraphes sont les uns en dessous des autres.
					</p>
				</div>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Rajouter du style à mon site</h1>
				<p>
					Nous allons voir comment rendre notre site plus joli, grâce aux <b>CSS</b>.
				</p>
				<p>
					Le CSS est un autre langage qu'il faut apprendre en parallèle du HTML.
				</p>
				<p>
					Il permet de <b>sélectionner</b> des éléments de notre page et de leur ajouter des <b>propriétés</b> graphiques.
				</p>
				<p>
					Les fichiers CSS ont <b>.css</b> comme extension.
				</p>
				<p>
					Pour indiquer à notre page HTML qu'elle doit utiliser un fichier CSS,
					il faut rajouter cette balise dans la balise <code>&lt;head&gt;&lt;/head&gt;</code> :
				</p>
				<p>
					<code>&lt;link rel="stylesheet" href="[lien_du_fichier_css]"&gt;</code>
				</p>
				<p>
					<code>rel="stylesheet"</code> indique au site que le fichier est un fichier de style. <code>href</code> indique 
					où trouver ce fichier.
				</p>
				<div class="example">
					<div class="code-box">
						<pre>
&lt;head&gt;
	&lt;meta charset="UTF-8"&gt;
	&lt;link rel="stylesheet" href="css/style.css"&gt;
	&lt;title&gt;Titre de mon site&lt;/title&gt;
&lt;/head&gt;
						</pre>
					</div>
				</div>
				<p>
					Un fichier CSS contient du code de cette forme (les ... indiquent qu'on peut continuer):
				</p>
				<div class="code-box">
					<pre>
[selecteur] {
	[propriété] : [valeur];
	[propriété] : [valeur];
	...
}
...
					</pre>
				</div>
				<p class="warning">
					La syntaxe est rigoureuse, il ne faut pas oublier les accolades et <b>;</b>
				</p>
				<p>
					Le <code>[selecteur]</code> est un ou les élément(s) sur le(s)quel(s) on veut appliquer le style. Par exemple
					une balise.
				</p>
				<p>
					La <code>[propriété]</code> est l'élément qu'on veut changer : la couleur, la taille etc.
				</p>
				<p>
					La <code>[valeur]</code> est la valeur qu'on donne à cette propriété : rouge, 16px etc.
				</p>
				<div class="example">
					<p>
						Si je veux que toutes mes balises <code>&lt;h1&gt;</code> soient rouges, j'écris :
					</p>
					<div class="code-box">
						<pre>
h1 {
	color : red
}
						</pre>
					</div>
					<p>
						Le sélecteur est <b>h1</b>, la propriété est <b>color</b>, et la valeur est <b>red</b>.
					</p>
				</div>
				<div class="exercice">
					<p>
						Crée un nouveau dossier <span class="file">mon_deuxieme_site</span>.
					</p>
					<p>
						Télécharge <a href="<?=code_url("seance9/debut_css", "html")?>" download="index.html">ce fichier</a> et place le dans ton dossier.
					</p>
					<p>
						Crée un fichier <span class="file">style.css</span>, attention l'extension n'est pas .html mais <b>.css</b>.
					</p>
					<p>
						Crée dans <span class="file">index.html</span> la balise <code>&lt;link&gt;</code> 
						pour être lié au fichier <span class="file">style.css</span>.
					</p>
					<p>
						Rajoute ce code dans <span class="file">style.css</span> :
					</p>
					<div class="code-box">
						<pre>
h1 {
	color : red;
}
						</pre>
					</div>
					<p>
						Regarde ton navigateur.
					</p>
					<p>
						Fais en sorte que le <code>h2</code> soit bleu (les <code>h1</code> doivent toujours rester rouges).
					</p>
				</div>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>De meilleurs sélections</h1>

				<h2>Mettre le même style à plusieurs balises différentes</h2>
				<p>
					Si je veux que <code>h1</code> et <code>h3</code> soient rouges en même temps, je les sépare par une virgule 
					dans mon CSS :
				</p>
				<div class="example">
					<div class="code-box">
						<pre>
h1, h3 {
	color : red;
}
						</pre>
				</div>
			</div>
			<p class="exercice">
					Rajoute la balise <code>h3</code> dans ton css. Regarde ton navigateur.
			</p>

			<h2>Mettre du style seulement à des éléments présents dans d'autres éléments</h2>
			<p>
				Si je veux que mes liens <code>a</code> dans mes paragraphes <code>p</code> soient en vert mais pas 
				les autres, je les sépare par un espace :
			</p>
			<div class="example">
				<p>
					Seuls les liens dans des paragraphes sont verts, pas les autres.
				</p>
				<div class="code-box">
					<pre>
p a {
	color : green;
}
					</pre>
				</div>
			</div>
			<p>
				On pourrait avoir un sélecteur comme celui-là : <code>p h1 a</code>, pour indiquer un <code>a</code>,
				dans un <code>h1</code>, dans un <code>p</code>.
			</p>
			<p class="exercice">
					Rajoute ce style dans ton css. Regarde ton navigateur.
			</p>

			<h2>Mettre à du style à des éléments spécifiques</h2>
			<p>
				Si je veux que un de mes <code>a</code>, un de mes <code>p</code> soient
				roses mais pas les autres, je dois leur ajouter une classe avec cette syntaxe :
			</p>
			<p>
				<code>&lt;[balise] class="[ma_classe]"&gt;&lt;/[balise]&gt;</code>
			</p>
			<p>
				Puis j'accède à cette classe depuis mon css comme ça :
			</p>
			<div class="code-box">
				<pre>
.[ma_classe] {
	...
}
				</pre>
			</div>
			<p class="warning">
				Il ne faut pas oublier le point !
			</p>
			<div class="example">
				<p>
					Je veux que quelques uns de mes éléments soient roses, pour cela je leur rajoute la classe <b>element-rose</b>.
				</p>
				<p>
					<code>&lt;a href="#nullepart" class="element-rose"&gt;un lien rose&lt;/a&gt;</code>
				</p>
				<p>
					<code>&lt;p class="element-rose"&gt;un paragraphe rose&lt;/p&gt;</code>
				</p>
				<p>
					Puis je les sélectionne avec mon css (sans oublier le point !):
				</p>
				<div class="code-box">
					<pre>
.element-rose {
	color : pink;
}
					</pre>
				</div>
			</div>
			<p class="exercice">
					Rajoute ce style dans ton css. Regarde ton navigateur.
			</p>
			<p>
				On pourrait avoir un sélecteur comme celui-là : <code>p .element-rose a</code>, pour indiquer un <code>a</code>,
				dans un un élément rose, dans un <code>p</code>.
			</p>
			<p>
				On peut rajouter plusieurs classes à un élément en les séparant par un espace.
			</p>
			<p class="example">
				<code>&lt;p class="element-rose grand-text"&gt;un paragraphe rose et avec du grand texte&lt;/p&gt;</code>
			</p>

			<h2>Mettre du style à un unique élément</h2>
			<p>
				Il arrive très souvent que l'on veuille rajouter un style à un <b>unique</b> élément. Pour cela, on lui 
				rajoute un attribut <code>id</code>, comme pour les ancres.
			</p>
			<p>
				Puis on le séléctionne comme une classe, mais au lieu d'avoir un point, on met un <b>#</b>.
			</p>
			<div class="example">
				<p>
					<code>&lt;p id="unique-element-orange"&gt;le seul paragraphe orange&lt;/p&gt;</code>
				</p>
				<div class="code-box">
					<pre>
#unique-element-orange {
	color : orange;
}
					</pre>
				</div>
			</div>
			<p class="exercice">
					Rajoute ce style dans ton css. Regarde ton navigateur.
			</p>

			<h2>Sélectioner un élément au survol</h2>
			<p>
				Je peux faire en sorte qu'un style s'applique à un élément quand je le survole à la souris.
			</p>
			<p>
				Pour cela je rajoute <code>:hover</code> à mon sélecteur.
			</p>
			<div class="example">
				<p>
					Ici quand je vais survoler tous les liens ils apparaîtront jaunes.
				</p>
				<div class="code-box">
					<pre>
a:hover {
	color : yellow;
}
					</pre>
				</div>
			</div>
			<p class="exercice">
					Rajoute ce style dans ton css. Regarde ton navigateur, survole les liens.
			</p>

			<p>
				Tu connais les principaux séléecteurs, mais il en existe d'autres. Tu peux les voir 
				<a href="https://www.w3schools.com/cssref/css_selectors.asp" target="_blank" rel="noopener noreferrer">ici (en anglais)</a>.
			</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Des propriétés CSS</h1>
				<p class="exercice">
					Vide tes fichiers <span class="file">style.css</span> et <span class="file">index.html</span> (seulement le body !).
				</p>

				<h2>Couleurs et transparence</h2>

				<p>
					On sait que les couleurs son représentées par 3 nombres : RGB.
				</p>
				<p>
					Sur <a href="https://www.google.fr/search?source=hp&ei=JHKTXPWyAaWVlwSsrouwDA&q=color+picker&btnK=Recherche+Google&oq=color+picker&gs_l=psy-ab.3..0l10.1997.2628..2969...0.0..1.146.526.0j4......0....1..gws-wiz.....0.0HVLB_4ADkY" target="_blank" rel="noopener noreferrer">ce site</a>
					on peut sélectionner des couleurs et voir leurs nombres RGB.
				</p>
				<p>
					Dans CSS, il y a la fonction <code>rgb(r, g, b)</code> qui permet d'indiquer une couleur.
				</p>
				<div class="example">
					<p>
						Mes <code>h1</code> seront violets avec ce code.
					</p>
					<div class="code-box">
						<pre>
h1 {
	color : rgb(197, 39, 249);
}
						</pre>
					</div>
				</div>
				<p class="warning">
					Les nombres varient de 0 à 255 !
				</p>
				<p class="exercice">
					Teste ce code css, mets la couleur de ton choix (tu vas devoir mettre des <code>h1</code> dans <span class="file">index.html</span>).
				</p>
				<p>
					Grâce à une fonction similaire : <code>rgba(r, g, b, a)</code>, on peut rendre les couleurs transparentes.
				</p>
				<p class="warning">
					Le nom de la fonction est <code>rgba</code>, un <b>a</b> s'est rajouté.
				</p>
				<p>
					Le nombre <code>a</code> indique l'opacité, il varie de <b>0</b> à <b>1</b>.
				</p>
				<ul>
					<li>1 : opaque</li>
					<li>0.75 : trois quarts opaque</li>
					<li>0.5 : semi opaque</li>
					<li>etc.</li>
				</ul>
				<div class="example">
					<p>
						Mes <code>h2</code> seront oranges et semi-transparents avec ce css.
					</p>
					<div class="code-box">
						<pre>
h2 {
	color : rgba(249, 86, 22, 0.5);
}
						</pre>
					</div>
				</div>
				<p class="exercice">
					Teste ce code css, fais varier l'opacité de la couleur (tu vas devoir mettre des <code>h2</code> dans <span class="file">index.html</span>).
				</p>

				<h2>Arrière-plans</h2>
				<p>
					Tu connais la propriété <code>color</code>, on va parler de <code>background-color</code>.
				</p>
				<p>
					La propriété <code>color</code> concerne la couleur du <b>texte</b>, tandis que <code>background-color</code> concerne la couleur de ce qu'il y a
					<b>derrière</b>.
				</p>
				<div class="exercice">
					<p>
						Rajoute ceci dans ton <span class="file">index.html</span>.
					</p>
					<div class="code-box">
						<pre>
&lt;p class="bleu-sur-noir"&gt;
    Ceci est un paragraphe. Il est bleu sur fond noir. Je mets plein de texte pour qu'il soit gros.
    Mais tu peux mettre ce que tu veux en fait. Tu peux aussi réduire la taille de ta fenêtre pour qu'il apparaisse plus gros.
&lt;/p&gt;
						</pre>
					</div>
					<p>
						Rajoute ceci dans ton <span class="file">style.css</span>.
					</p>
					<div class="code-box">
						<pre>
.bleu-sur-noir{
    background-color : rgb(0, 0, 0);
    color : rgb(5, 202, 187);
}
						</pre>
					</div>
				</div>
				<p>
					On peut utiliser <code>rgba</code> pour la propriété <code>background-color</code>.
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Un exercice</h1>
				<div class="exercice">
					<p>
						Reproduis cette page :
					</p>
					<div class="row">
						<div class="col-12">
							<img class="img-fluid" src="<?=img_url("seance9/capture_site")?>" alt="Site à reproduire" style="border : 3px solid black;">
						</div>
					</div>
					<p>
						Le lien noir inverse ses couleurs au survol : le noir devient blanc et inversement.
					</p>
					<p>
						Le lien bleu est gras, il devient italique au survol, il ne doit <b>pas</b> être italique et gras en même temps.
					</p>
					<p>
						Le paragraphe barré grossit au survol.
					</p>
				</div>
			</div>
		</div>

	</div>
</main>
