<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
	<div class="container">
		<div class="row white-box">
			<div class="col-12">
				<h1>Nouvelle période</h1>
				<p>
					Salut toi, t'as passé de bonnes vacances ? Nous oui !
				</p>
				<p>
					T'es prêt(e) à reprendre ? Nous oui !
				</p>
				<p>
					On a un peu (beaucoup) changé le programme, en effet on va commencer à concevoir des sites web dès aujourd'hui !
				</p>
				<p>
					L'objectif de cette période est de créer ton site personnel et de le mettre en ligne.
				</p>
				<p>
					Pour voir le site que tu vas créer, <a href="<?=site_url("templates/template/objectif")?>" target="_blank">clique ici</a>. 
					Evidemment, il sera fortement encouragé de le personnaliser !
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Une page web, comment ça marche ?</h1>
				<p>
					Pour te rendre sur un site web, tu utilises un <b>navigateur</b> tel que Google Chrome, Mozilla, Safari etc.
				</p>
				<p>
					Pour afficher le site, le navigateur va décoder son <b>code source</b>.
				</p>
				<div class="exercice">
					<p>
						Rends-toi sur <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer">ce site bien connu</a>.
					</p>
					<p>
						Fais un clic droit sur une zone vide de la page et sélectionne <b>Code source de la page</b>.
					</p>
				</div>
				<p>
					En tant que développeurs, on écrit du code similaire pour créer des pages web.
				</p>
				<p>
					Le langage utilisé est <b>HTML</b>. Chaque fichier HTML se termine avec l'extension <b>.html</b>
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Commençons !</h1>
				<div class="exercice">
					<p>
						Ouvre l'éditeur de texte <b>Brackets</b>.
					</p>
					<p>
						Crée un nouveau dossier <span class="file">monsite</span>.
					</p>
					<p class="warning">
						Il ne doit pas y a voir d'espace, ni d'accents dans les noms de fichiers/dossiers.
					</p>
					<p>
						Crée dans ce dossier un fichier <span class="file">index.html</span>. 
						C'est comme ça que l'on nomme la page d'accueil d'un site.
					</p>
					<p>
						Tape ceci dans <span class="file">index.html</span> :
					</p>
					<div class="code-box">
						<pre>
Hello World !
https://www.google.fr
						</pre>
					</div>
					<p>
						Ouvre <span class="file">index.html</span> avec ton <b>navigateur</b>.
					</p>
				</div>
				<p>
					Bravo tu as écrit ta première page HTML !
				</p>
				<p>
					Evidemment, ton site n'est pas en ligne, il est <b>local</b>. 
					On verra comment le mettre en ligne dans quelques séances.
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les balises</h1>
				<p>
					On aimerait lorque l'on clique sur <code>https://www.google.fr</code>, dans le navigateur, être dirigé sur la page Google.
				</p>
				<p>
					Actuellement, si on clique dessus, il ne se passe rien. Cela est dû au fait que le navigateur ne comprend pas que
					c'est un <b>lien</b>.
					Il faut pour cela utiliser des <b>balises</b>.
				</p>
				<p>
					Les balises permettent de dire au navigateur que "ceci est un lien", "ceci est une image", "ceci un paragraphe" etc.
				</p>
				<p>
					Voici 2 balises que l'on va utiliser :
				</p>
				<ul>
					<li><code>p</code> : pour créer des paragraphes</li>
					<li><code>a</code> : pour créer des liens</li>
				</ul>
				<p>
					La syntaxe est la suivante : <code>	&lt;[nom_de_la_balise]&gt; [element] &lt;/[nom_de_la_balise]&gt;</code>
				</p>
				<p class="example">
					Pour créer un paragraphe (balise <code>p</code>), on écrit : <code>&lt;p&gt; Ton texte &lt;/p&gt;</code>
				</p>
				<p>
					La balise à gauche est <b>ouvrante</b>, celle de droite est <b>fermante</b>.
				</p>
				<p class="warning">
					La balise fermante contient un <b>/</b> !
				</p>
				<p>
					Pour créer un lien, on fait la même chose avec la balise <code>a</code>.
				</p>
				<div class="exercice">
					<p>
						Entoure le <b>Hello World !</b> de balises <code>p</code> et le <strong>lien</strong> de balises <code>a</code>.
					</p>
					<p>
						Ouvre ton navigateur et regarde les résultats. 
						Le paragraphe est bien créé mais le lien ne marche pas ! C'est normal, rends-toi à la section d'après pour corriger ça.
					</p>
				</div>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les attributs des balises</h1>
				<p>
					La balise <code>a</code> ne marche pas toute seule. Il faut lui donner un <b>attribut</b>.
				</p>
				<p>
					Les attributs permettent de personnaliser les balises. Voici une liste de quelques attributs :
				</p>
				<p>
					L'attribut qui nous intéresse pour l'instant est <code>href</code>.
				</p>
				<p>
					Un attribut se place dans la balise <b>ouvrante</b>. Voici la syntaxe :
				</p>
				<p>
					<code>&lt;a href="[lien]"&gt;</code>
				</p>
				<p class="example">
					Par exemple si je veux rediriger vers youtube j'écris : <br>
					<code>&lt;a href="https://www.youtube.com"&gt;https://www.youtube.com&lt;/a&gt;</code>
				</p>

				<div class="exercice">
					<p>
						Rajoute un <code>href</code> dans le lien, redirigeant vers <b>https://www.google.fr</b>
					</p>
					<p>
						Dans ton navigateur tu peux désormais cliquer sur le lien qui te renvoit vers Google !
					</p>
				</div>

				<p>
					On peut écrire ce que l'on veut entre la balise ouvrante et la balise fermante, c'est le <code>href</code>
					qui détermine le lien : 
				</p>
				<p class="example">
					<code>&lt;a href="https://www.youtube.com"&gt;Clique ici&lt;/a&gt;</code>
				</p>

				<div class="exercice">
					<p>
						Remplace le 2ème <b>https://www.google.fr</b> par un autre texte.
					</p>
				</div>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les balises de titres</h1>
				<p>
					On a vu les balises de lien <code>a</code> et les balises de paragraphe <code>p</code>.
				</p>
				<p>
					Il existe 6 balises pour les titres : <code>h1</code>, <code>h2</code>, <code>h3</code>, <code>h4</code>,
					<code>h5</code>, <code>h6</code>
				</p>
				<p>
					<code>h1</code> correspond au titre le <b>plus</b> important, <code>h6</code> est le <b>moins</b> important (le sous-sous-sous-sous-sous-titre !).
				</p>
				<div class="exercice">
					<p>
						Rajoute un titre (<code>h1</code>), un sous-titre (<code>h2</code>) et un sous-sous-titre (<code>h3</code>)
						dans ta page d'accueil. (Mets ce que tu veux comme texte).
					</p>
					<p>
						Tu peux remarquer comment ton navigateur rend <code>h1</code> plus grand que <code>h2</code>, lui même
						plus grand que <code>h3</code>.
					</p>
				</div>
			</div>
		</div>

	</div>
</main>
