<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
	<div class="container">

		<div class="row white-box">
			<div class="col-12">
				<h1>Le span</h1>
				<p>
					La balise <code>span</code> est équivalente à la balise <code>div</code>, mais est une balise <b>inline</b>,
					cela veut dire qu'on la met dans du texte. Elle permet d'ajouter des effets CSS à l'intérieur d'un texte par
					exemple.
				</p>
				<div class="example">
					<p>
						Si je veux créer des lettrines je peux donc écrire ça :
					</p>
					<div class="code-box">
						<pre>
&lt;p&gt;&lt;span class="lettrine"&gt;C&lt;/span&gt;e paragraphe a une lettrine&lt;/p&gt;
						</pre>
					</div>
					<p>
						Et dans mon CSS : 
					</p>
					<div class="code-box">
						<pre>
.lettrine {
	color : blue;
}
						</pre>
					</div>
				</div>
				<p class="exercice">
					Teste ce code.
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Background Images</h1>
				<p>
					La propriété CSS <code>background-image</code> te permet de mettre une image en arrière plan.
				</p>
				<p>
					Le format est :
				</p>
				<div class="code-box">
					<pre>
[selecteur] {
	background-image : url("[lien_relatif_ou_absolu_de_l'image]");
}
					</pre>
				</div>
				<p class="warning">
					Le lien relatif se fait par rapport au CSS !
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>vh et vw</h1>
				<p>
					<code>vh</code> et <code>vw</code> sont des unités de hauteur et largeur (à utiliser avec <code>width</code> et 
					<code>height</code> donc) permettant de dimensionner par rapport à la taille de <b>l'écran</b>.
				</p>
				<p class="example">
					Si mon écran à une dimension de 1920 x 1080, 10vh valent 108px et 10vw valent 192px.
				</p>
				<p>
					Donc si on veut s'assurer qu'un élément prend au moins toute la hauteur de l'écran on peut écrire :
				</p>
				<div class="code-box">
					<pre>
[element] {
	min-height : 100vh;
}
					</pre>
				</div>
				<div class="exercice">
					Dans un nouveau fichier html, rajoute ce code :
					<div class="code-box">
						<pre>
&lt;section class="section1"&gt;

&lt;/section&gt;
&lt;section class="section2"&gt;

&lt;/section&gt;
						</pre>
					</div>
					<p>
						Puis crée un fichier css et rajoute ce style :
					</p>
					<div class="code-box">
						<pre>
.section1
{
	min-height: 120vh;
	width: 100%;
	background-color: blue;
}

.section2
{
	min-height: 10vh;
	width: 100%;
	background-color: red;
}
						</pre>
					</div>
					<p>
						Change un peu les valeurs.
					</p>
				</div>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Background images</h1>
				<p>
					La propriété CSS <code>background-image</code> permet d'ajouter une image en arrière-plan. Sa valeur est :
				</p>
				<p>
					<code>url("[lien_relatif_ou_absolu_de_limage]")</code>
				</p>
				<p class="warning">
					Le lien relatif est relatif <b>par rapport au fichier CSS</b>.
				</p>
				<div class="example">
					<p>
						Voici ma hiérarchie de dossiers :
					</p>
					<div class="code-box">
						<pre>
monsite /
--| images /
----| mon_image.png
--| styles /
----| style.css
						</pre>
					</div>
					<p>
						Depuis style.css j'écrirais :
					</p>
					<div class="code-box">
						<pre>
[element]{
	background-image : url("../images/mon_image.png");
}
						</pre>
					</div>

				</div>

				<div class="exercice">
					<p>
						Crée un nouveau fichier html et ajoutes-y ce code :
					</p>
					<div class="code-box">
						<pre>
&lt;section class="section1"&gt;
	&lt;h1&gt;Avec un arrière plan&lt;/h1&gt;
&lt;/section&gt;
						</pre>
					</div>
					<p>
						Puis rajoute ce css :
					</p>
					<div class="code-box">
						<pre>
.section1
{
	min-height: 120vh;
	width: 100%;
	background-image: url("<?=img_url("p2/computer_fear");?>");
}

h1{
	color: white;
	font-size: 10rem;
	margin : 0;
}
						</pre>
					</div>
				</div>

				<p>
					Tada ! Ta section a maintenant une image en arrière-plan.
				</p>
				<p>
					Hè mais minute papillon, mon image elle se répète !! Ah oui ?
				</p>
				<p class="exercice">
					Rajoute ça dans ton css (pour le .section1) <code>background-repeat: no-repeat;</code>
				</p>
				<p>
					Tada ! Ton image ne se répète plus !
				</p>
				<p>
					Hè mais minute papillon, maintenant elle ne prend plus toute la place !! Ah oui ?
				</p>
				<p class="exercice">
					Rajoute ça dans ton css (pour le .section1) <code>background-size: cover;</code>
				</p>

			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les transformations et transitions</h1>
				<div class="exercice">
					<p>
						Crée un fichier html et rajoute ce code dedans : 
					</p>
					<div class="code-box">
						<pre>
&lt;section class="section1"&gt;
&lt;/section&gt;
						</pre>
					</div>
					<p>
						Puis rajoute ce css :
					</p>
					<div class="code-box">
						<pre>
body{
	padding: 10rem;
}
.section1
{
	height: 10vh;
	width: 10vw;
	background-color: blue;
}
						</pre>
					</div>
				</div>
				<p>
					La propriété <code>transform</code> te permet d'appliquer des <b>transformations</b> à un élément telles que :
				</p>
				<ul>
					<li>Des rotations, <code>rotate(90deg)</code></li>
					<li>Des agrandissements ou réductions, <code>scale(1.2)</code></li>
					<li><a href="https://www.w3schools.com/cssref/css3_pr_transform.asp" target="_blank" rel="noopener noreferrer">Et d'autres</a></li>
				</ul>
				<div class="exercice">
					<p>
						Rajoute cette propriété dans ton css :
					</p>
					<div class="code-box">
						<pre>
.section1:hover{
	transform : rotate(60deg) scale(3);
}
						</pre>
					</div>
				</div>
				<p>
					Les <code>transition</code> te permettent de modifier des éléments de façon graduelle, par exemple de passer du blanc au noir de façon douce.
				</p>
				<p class="exercice">
					Dans .section1 (pas .section:hover) rajoute : <code>transition : 1s;</code> <br>Modifie 1s en 2s, 0.5s etc.
				</p>
				<p>
					La propriété <code>transition : 1s</code> indique que la transition doit durer 1s. Elle est beaucoup plus complexe que ça mais
					cela nous suffit. Si tu veux en savoir plus, <a href="https://www.w3schools.com/css/css3_transitions.asp" target="_blank" rel="noopener noreferrer">clique ici</a>.
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Et on continue ton site</h1>
				<p>
					Si tu n'as pas réussi à reproduire la structure du site objectif, tu peux <a href="<?= code_url("seance11/template", "html");?>" download="index.html">la télécharger</a>.
				</p>
				<p>
					<a href="<?=site_url("/templates/template/objectif")?>" target="_blank">Le site "objectif"</a>
				</p>
				<p class="exercice">
					Remplis ton site avec les informations que tu veux et commence à lui ajouter le style qui te plaît. Pour t'entraîner tu peux commencer à reproduire le site objectif. Si tu utilises le template ci dessus, il y a déjà des noms de classes et des id.
				</p>
				<p class="warning">
					Il y a certaines choses qu'on apprendra à faire la semaine prochaine comme : rendre le site adapté en mobile avec la propriété <code>flex</code>, rajouter des icônes.
				</p>
			</div>
		</div>

	</div>
</main>
