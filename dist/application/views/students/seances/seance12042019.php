<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="container-fluid below-menu" id="main">
	<div class="container">

		<div class="row white-box">
			<div class="col-12">
				<h1>Les media queries</h1>
				<p>
					Les media queries permettent d'appliquer du style css selon certaines conditions : (taille de l'écran, son orientation, sa couleur etc.).
				</p>
				<p>
					La media query la plus utilisée concerne la largeur des écrans. En effet grâce à ça on peut appliquer un style différent si 
					l'écran est plus petit ou plus grand. Ce qui permet de faire du <b>responsive design</b>, c'est-à-dire du css qui s'adapte aux
					téléphones comme aux grands écrans.
				</p>
				<p>
					Par exemple si je veux réduire la taille de police de mes paragraphes sur les écrans plus petits que 900px de large, j'écris dans mon fichier CSS:
				</p>
				<div class="code-box">
					<pre>
@media screen and (max-width : 900px)
{
	p {
		font-size : 0.75rem;
	}
}
					</pre>
				</div>
				<p>
					La media query ci-dessus indique que si mon écran (<code>screen</code>) a une largeur (<code>width</code>) qui
					est au plus (<code>max</code>) de 900px, alors on applique tout le style qui est dans les accolades,
					ici les paragraphes ont une <code>font-size</code> de 0.75rem (12px).
				</p>
				<p>
					On peut remplacer <code>max-width</code> par <code>min-width</code>, et cette media query s'appliquera
					à tous les écrans plus grands que 900px de largeur.
				</p>
				<p>
					On peut avoir plusieurs media queries à la suite :
				</p>
				<div class="code-box">
					<pre>
@media screen and (max-width: 300px){
}

@media screen and (max-width: 500px){
}

@media screen and (min-width: 769px) and (max-width: 1170px){
}
					</pre>
				</div>
				<div class="exercice">
					<p>
						Crée un fichier html et rajoute ce code dans le body :
					</p>
					<div class="code-box">
						<pre>
&lt;section class="section1"&gt;

&lt;/section&gt;
						</pre>
					</div>
					<p>
						Puis rajoute ce style CSS (n'oublie pas de lier le html et le css avec une balise <code>link</code>) :
					</p>
					<div class="code-box">
						<pre>
body{
	padding: 0;
	margin: 0;
}

.section1{
	height: 100vh;
	width: 100vw;
	background-color: blue;
}

@media screen and (max-width: 500px){
	.section1{
		background-color: red;
	}
}
						</pre>
					</div>
					<p>
						Redimensionne ton écran.
					</p>
				</div>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les flexbox</h1>
				<p>
					Les flexbox permettent de placer facilement des éléments web.
				</p>
				<p>
					Les flexbox consistent en un conteneur ayant la propriété CSS <code>display : flex;</code>. Ce conteneur va contenir les éléments qu'on veut positionner:
				</p>
				<div class="exercice">
					<p>
						Crée un fichier html et rajoute ce code dans le body :
					</p>
					<div class="code-box">
						<pre>
&lt;div class=&quot;flexbox&quot;&gt; 
	&lt;p class=&quot;red&quot;&gt;
		P1 
	&lt;/p&gt; 
	&lt;p class=&quot;blue&quot;&gt; 
		P2 
	&lt;/p&gt; 
	&lt;p class=&quot;red&quot;&gt; 
		P3 
	&lt;/p&gt; 
	&lt;p class=&quot;blue&quot;&gt; 
		P4 
	&lt;/p&gt; 
	&lt;p class=&quot;red&quot;&gt; 
		P5 
	&lt;/p&gt; 
&lt;/div&gt;
						</pre>
					</div>
					<p>
						Puis rajoute ce style CSS (n'oublie pas de lier le html et le css avec une balise <code>link</code>) :
					</p>
					<div class="code-box">
						<pre>
p {
	margin: 0;
	padding: 2rem;
}

.red{
	background-color: red;
}

.blue {
	background-color: blue;
}
						</pre>
					</div>
					<p>
						Tu devrais obtenir quelque chose comme ça :
					</p>
					<div class="show">
						<div>
							<p class="red">
								P1
							</p>
							<p class="blue">
								P2
							</p>
							<p class="red">
								P3
							</p>
							<p class="blue">
								P4
							</p>
							<p class="red">
								P5
							</p>
						</div>
					</div>
					<p>
						Rajoute ceci dans ton css :
					</p>
					<div class="code-box">
						<pre>
.flexbox {
	display: flex;

	min-height: 10rem;
	background-color : black;
}
						</pre>
					</div>
					<p>
						Tu devrais obtenir quelque chose comme ça :
					</p>
					<div class="show">
						<div class="flexbox">
							<p class="red">
								P1
							</p>
							<p class="blue">
								P2
							</p>
							<p class="red">
								P3
							</p>
							<p class="blue">
								P4
							</p>
							<p class="red">
								P5
							</p>
						</div>
					</div>
				</div>
				<p>
					Si tu réduis la taille de ton écran, tu verras que les paragraphes sortent de l'écran.
				</p>
				<p>
					La propriété <code>flex-wrap</code> permet de faire passer les éléments à la ligne si l'écran est trop petit.
				</p>
				<div class="exercice">
					<p>
						Rajoute ceci dans ton .flexbox :
					</p>
					<div class="code-box">
						<pre>
.flexbox{
	flex-wrap : wrap;
}
						</pre>
					</div>
					<p>
						Tu devrais obtenir quelque chose comme ça :
					</p>
					<div class="show">
						<div class="flexbox f-wrap">
							<p class="red">
								P1
							</p>
							<p class="blue">
								P2
							</p>
							<p class="red">
								P3
							</p>
							<p class="blue">
								P4
							</p>
							<p class="red">
								P5
							</p>
						</div>
					</div>
					<p>
						Redimensionne ton écran.
					</p>
				</div>

				<p>
					L'<b>axe principal</b> d'une flexbox par défaut est horizontal : ici les paragraphes sont alignés
					horizontalement.
				</p>
				<p>
					On peut modifier cette <b>direction principale</b> avec la propriété <code>flex-direction</code> :
				</p>
				<ul>
					<li><code>flex-direction : row;</code> pour une direction horizontale (par défaut)</li>
					<li><code>flex-direction : column;</code> pour une direction verticale</li>
				</ul>
				<p>
					Si on dit que l'axe principal est horizontal, alors <b>l'axe secondaire</b> est vertical, et inversement.
				</p>

				<div class="exercice">
					<p>
						Rajoute ceci dans ton .flexbox :
					</p>
					<div class="code-box">
						<pre>
.flexbox{
	flex-direction : column;
}
						</pre>
					</div>
					<p>
						Les paragraphes se remettent les uns en dessous des autres ! Tu devrais obtenir quelque chose comme ça :
					</p>
					<div class="show">
						<div class="flexbox f-wrap f-col">
							<p class="red">
								P1
							</p>
							<p class="blue">
								P2
							</p>
							<p class="red">
								P3
							</p>
							<p class="blue">
								P4
							</p>
							<p class="red">
								P5
							</p>
						</div>
					</div>
					<p>
						Retire le <code>flex-direction : column;</code>, il va nous gêner pour la suite.
					</p>
				</div>
				<p>
					On peut aligner les élements dans la flexbox selon les deux axes : principal et secondaire.
				</p>
				<p>
					Pour l'axe principal, on utilise la propriété <code>justify-content</code>, qui peut prendre les valeurs suivantes entre autres :
				</p>
				<p>
					<b>flex-start</b> (éléments positionnés au début du sens de lecture, valeur par défaut),
					<b>flex-end</b> (éléments positionnés à la fin),
					<b>center</b> (position centrale),
					<b>space-between</b> (répartition “justifiée”),
					<b>space-around</b> (variante de répartition “justifiée”)
				</p>
				<div class="exercice">
					<p>
						Rajoute ceci dans ta .flexbox : <code>justify-content: space-around;</code>.
					</p>
					<p>
						Les paragraphes sont espacés horizontalement ! Tu devrais obtenir quelque chose comme ça :
					</p>
					<div class="show">
						<div class="flexbox f-wrap f-jc">
							<p class="red">
								P1
							</p>
							<p class="blue">
								P2
							</p>
							<p class="red">
								P3
							</p>
							<p class="blue">
								P4
							</p>
							<p class="red">
								P5
							</p>
						</div>
					</div>
				</div>
				<p>
					Pour l'axe secondaire, on utilise la propriété <code>align-items</code>, qui peut prendre les valeurs suivantes entre autres :
				</p>
				<p>
					<b>flex-start</b> (au début),
					<b>flex-end</b> (à la fin),
					<b>center</b> (au centre),
					<b>stretch</b> (étirés dans l’espace disponible, valeur par défaut).

				</p>
				<div class="exercice">
					<p>
						Rajoute ceci dans ta .flexbox : <code>align-items: center;</code>.
					</p>
					<p>
						Les paragraphes sont espacés verticalement ! Tu devrais obtenir quelque chose comme ça :
					</p>
					<div class="show">
						<div class="flexbox f-wrap f-jc f-ai">
							<p class="red">
								P1
							</p>
							<p class="blue">
								P2
							</p>
							<p class="red">
								P3
							</p>
							<p class="blue">
								P4
							</p>
							<p class="red">
								P5
							</p>
						</div>
					</div>
				</div>
				<p>
					La propriété <code>flex</code> permet de donner plus de place à des éléments. Sa valeur est un entier indiquant son importance.
				</p>
				<div class="exercice">
					<p>
						Rajoute ceci dans ton CSS :
					</p>
					<div class="code-box">
						<pre>
.blue{
	flex: 1;
}
.red {
	flex : 1;
}
						</pre>
					</div>
					<p>
						Les paragraphes ont pris tous l'espace, et vu que les bleus comme les rouges ont la même importance, ils prennent la même place.
					</p>
					<p>
						Remplace un des deux 1 par 2 pour donner plus d'importance à une des deux couleurs.
					</p>
					<p>
						Tu devrais avoir ça  (si tu as mis le 2 dans les rouges) :
					</p>
					<div class="show flexible">
						<div class="flexbox f-wrap f-jc f-ai">
							<p class="red">
								flex : 2;
							</p>
							<p class="blue">
								flex : 1;
							</p>
							<p class="red">
								flex : 2;
							</p>
							<p class="blue">
								flex : 1;
							</p>
							<p class="red">
								flex : 2;
							</p>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Un peu de responsive design</h1>
				<p>
					Le responsive design essaie de n'utiliser qu'un seul fichier CSS pour tous les écrans, c'est un mélange subtil de media queries, flexbox,
					de gestion de tailles etc.
				</p>
				<p>
					A cause de la complexité des écrans, un pixel n'a pas la même taille partout. Pour pallier à ce problème il faut
					rajouter cette balise dans le <code>head</code> de chaque page :
				</p>
				<p>
					<code>&lt;meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"&gt;</code>
				</p>
				<p>
					Cette balise assez complexe permet d'uniformiser les écrans. Pour la comprendre entièrement, tu peux 
					<a href="https://www.alsacreations.com/article/lire/1490-comprendre-le-viewport-dans-le-web-mobile.html" target="_blank" rel="noopener noreferrer">lire ceci</a>.
					Attention c'est coriace !
				</p>
				<p class="warning">
					A partir de maintenant on suppose que tu as mis cette balise dans toutes tes pages !
				</p>
				<p>
					Le responsive design est très complexe mais l'idée est : d'utiliser des flexboxes, d'appliquer différentes media queries, et pour chacune de ces
					queries modifier les CSS pour qu'il s'adapte à l'écran. L'idéal aujourd'hui pour créer un site Internet est d'abord de le penser pour le téléphone, puis de rajouter des media queries
					pour les grands écrans. Ceci s'appelle le <a href="https://www.neoptimal.com/blog/mobile-friendly-mobile-first-site-web" target="_blank" rel="noopener noreferrer">mobile first</a>.
				</p>
				<div class="exercice">
					<p>
						Rajoute ceci dans ta .flexbox : <code>flex-direction: column;</code>;
					</p>
					<p>
						Puis rajoute cette media query :
					</p>
					<div class="code-box">
						<pre>
@media screen and (min-width : 900px){
	.flexbox {
		flex-direction : row;
	}
}
						</pre>
					</div>
					<p>
					Quand l'écran est petit, les éléments sont en colonne, et quand il dépasse 900px de large, on passe en horizontal.
				</p>
					<p>
						Tu devrais avoir ça  (si tu as mis le 2 dans les rouges) :
					</p>
					<div class="show responsive">
						<div class="flexbox f-wrap f-jc f-ai">
						<p class="red">
								P1
							</p>
							<p class="blue">
								P2
							</p>
							<p class="red">
								P3
							</p>
							<p class="blue">
								P4
							</p>
							<p class="red">
								P5
							</p>
						</div>
					</div>
				</div>
				<p>
					Ceci est un début de responsive design.
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Mettre son site en ligne avec Github Pages</h1>
				<p>
					Julian est en train d'écrire cette partie revient plus tard ;)
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Continue ton site !</h1>
			</div>
		</div>

	</div>
</main>

<style>
	.show p {
	margin: 0;
	padding: 2rem;
	text-align : left;
}

.show .red{
	background-color: red;
}

.show .blue {
	background-color: blue;
}

.show .flexbox {
	
	display: flex;
	background-color : black;
	background-color : black;
		min-height : 10rem;
}

.show.responsive .flexbox {
	flex-direction : column;
}

@media screen and (min-width : 900px){
	.show.responsive .flexbox {
	flex-direction : row;
}
}

.show .f-wrap {
	flex-wrap : wrap;
}

.show .f-col {
	flex-direction : column;
}

.show .f-jc {
	justify-content : space-around;
}

.show .f-ai {
	align-items : center;
}

.show.flexible .blue{
	flex: 1;
}
.show.flexible .red {
	flex : 2;
}

.show.flexible p {
	padding : 1rem;
}
</style>
