<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
	<div class="container">
	<div class="row  white-box">
			<div class="col-12">
			<h1>Récap' de la séance 8</h1>
			</div>
	</div>

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
				<p class="warning">
						Il ne doit pas y a voir d'espace, ni d'accents dans les noms de fichiers/dossiers.
				</p>
				<p class="warning">
					A chaque fois que tu fais des modifications sur tes fichiers tu dois sauvegarder. Puis tu dois actualiser la page 
					sur ton navigateur, sinon tu ne verras pas les modifications.
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

				<p>
					On peut écrire ce que l'on veut entre la balise ouvrante et la balise fermante, c'est le <code>href</code>
					qui détermine le lien : 
				</p>
				<p class="example">
					<code>&lt;a href="https://www.youtube.com"&gt;Clique ici&lt;/a&gt;</code>
				</p>
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
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>La véritable structure d'une page HTML</h1>
				<p>
					Jusque là, nous avons codé notre page n'importe comment !
				</p>
				<p>
					Une vraie page Internet a cette forme ci :
				</p>
				<div class="code-box">
					<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;

	&lt;head&gt;
		&lt;meta charset="utf-8"&gt;				
		&lt;title&gt;[Titre de la page]&lt;/title&gt;
	&lt;/head&gt;
	
	&lt;body&gt;

	&lt;/body&gt;
&lt;/html&gt;
					</pre>
				</div>
				<p>
					La première balise est <code>&lt;!DOCTYPE html&gt;</code>, elle permet de dire au navigateur d'utiliser la version
					la plus récente d'HTML.
				</p>
				<p class="warning">
					Il n'y a pas de balise fermante pour le DOCTYPE. Cela s'appelle une balise <b>orpheline</b>.
				</p>
				<p>
					La seconde balise est <code>&lt;html&gt;&lt;/html&gt;</code>. Elle contient <b>toute</b> la page. 
					Il ne doit rien y avoir en dehors à part le DOCTYPE.
				</p>
				<p>
					Le <code>&lt;head&gt;&lt;/head&gt;</code> va contenir des informations utiles sur la page. Ici par exemple elle contient
					son <b>titre</b> qui va s'afficher dans l'onglet. 
					La balise <code>&lt;meta charset="utf-8"&gt;</code> va nous permettre d'utiliser des accents.
				</p>
				<p class="warning">
					La balise <code>meta</code> est aussi orpheline.
				</p>
				<p>
					Enfin, la balise <code>&lt;body&gt;&lt;/body&gt;</code> va contenir la partie que l'on veut montrer aux visiteurs :
					les images, textes, liens etc.
				</p>
				<p>
					A chaque fois que tu veux créer une page web, tu peux télécharger
					<a href="<?= code_url("seance8/template", "html");?>" download="template.html">ce template</a> qui contient
					une page HTML de base.
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Un peu plus sur les liens</h1>
				<p>
					Dans la balise <code>a</code>, le "https://www.youtube.com/" s'appelle un <b>chemin</b> ou une <b>URL</b>.
				</p>
				<p>
					Il existe deux types de chemins : <b>absolu</b> et <b>relatif</b>.
				</p>
				<p>
					"https://www.youtube.com/" est un chemin absolu. On utilise les chemins absolus pour référencer des ressources sur d'autres sites. Ici je veux rediriger vers un autre site : Youtube.
				</p>
				<p>
					Si je veux utiliser des ressources qui se trouvent sur le site que l'on crée, on va utiliser des chemins relatifs.
				</p>
				<p>
					Les chemins relatifs dépendent de comment tu organises tes dossiers. Par exemple on va prendre cette structure :
				</p>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 offset-lg-4 offset-md-3">
						<img class="img-fluid" src="<?=img_url("seance8/dossiers")?>" alt="Structures de dossier">
					</div>
				</div>

				<h2>Pour un fichier au même niveau</h2>
				<p>
					Si depuis <span class="file">index.html</span> je veux aller dans <span class="file">cv.html</span>, le
					chemin est simplement <code>cv.html</code>.
				</p>
				<p class="example">
					Mon lien sera par exemple : <code>&lt;a href="cv.html"&gt;Voir mon CV&lt;/a&gt;</code>
				</p>

				<h2>Pour un fichier dans un dossier enfant</h2>
				<p>
					Si depuis <span class="file">index.html</span> je veux aller dans <span class="file">article.html</span>, je dois
					passer par le dossier <span class="file">articles</span>. Le chemin sera donc <code>articles/article.html</code>.
				</p>
				<p class="example">
					Mon lien sera par exemple : <code>&lt;a href="articles/article.html"&gt;Voir mon article&lt;/a&gt;</code>
				</p>
				<p>
					S'il y a d'autres sous-dossiers, je dois les inclure.
				</p>
				<p class="example">
					Par exemple : <code>dossier1/dossier2/dossier3/article.html</code>
				</p>

				<h2>Pour un fichier dans un dossier parent</h2>
				<p>
					Si je pars de <span class="file">article.html</span> pour aller à <span class="file">index.html</span>, je dois remonter, on écrira : 
					<code>../index.html</code>
				</p>
				<p class="example">
					Mon lien sera par exemple : <code>&lt;a href="../index.html"&gt;Retour à l'accueil&lt;/a&gt;</code>
				</p>
				<p>
					S'il y a d'autres dossiers, je dois les inclure.
				</p>
				<p class="example">
					Par exemple : <code>../../../index.html</code>
				</p>
				<p class="example">
					Il est possible d'avoir des chemins comme ça : <br>
					<code>../../../dossier1/dossier2/index.html</code>
				</p>
			</div>
		</div>

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
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les ancres</h1>
				<p>
					On a vu comment faire des liens vers d'autres sites, ou d'autre pages de notre site à nous.
				</p>
				<p>
					Il reste une dernière chose à aborder : les <b>ancres</b>.
				</p>
				<p>
					Les ancres permettent de faire des liens sur la <b>même</b> page. 
				</p>
				<p class="example">
					Si une page est très longue, on peut créer un bouton qui emmène en haut ou en bas de la page.
				</p>
				<p>
					Pour créer une ancre, on ajoute un attribut <code>id</code> à une balise, n'importe laquelle, qui va alors servir de repère.
				</p>
				<p>
					On peut donner n'importe quelle valeur à cet attribut (sans espace, ni accent).
				</p>
				<p class="example">
					<code>&lt;p id="dernier_paragraphe"&gt;Ceci est le dernier paragraphe&lt;/p&gt;</code>
				</p>
				<p>
					Puis on crée un lien vers cette ancre avec ce format :
				</p>
				<p>
					<code>&lt;a href="#[nom_id]"&gt;Cliquez ici&lt;/a&gt;</code>
				</p>
				<p class="example">
					<code>&lt;a href="#dernier_paragraphe"&gt;Cliquez ici pour se rendre au dernier paragraphe&lt;/a&gt;</code>
				</p>
				<p class="warning">
					Il ne faut pas oublier le <b>#</b> !
				</p>
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
			</div>
		</div>

	</div>
</main>
