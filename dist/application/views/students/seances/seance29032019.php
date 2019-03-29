<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- 
	Yo Julian :D
	Voilà ce qu'il faut faire, j'ai rajouté les trucs qu'on na pas eu le temps de faire avant :)
	Pour créer des exos, tu peux t'inspirer du site objectif (http://deficode.parkours.fr/index.php/templates/template/objectif)
	Pas la peine de s'embeter avec le recap
	Tu peux chercher les TODO pour voir où y a du taf ;)
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
            </div>
        </div>
        <div class="row white-box">
			<div class="col-12">
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
                    Une police de caractères (ou police d'écriture) dit aux ordinateurs comment dessiner les lettres d'un texte.
                </p>
                <div class="example">
					<p>écrire <b style="font-family: Serif">avec empatemment</b> ou <b style="font-family: cursive">en attaché</b></p>
				</div>
                <p>
                    Pour choisir les polices de ses textes, on utilise le css: <code>font-family</code>.
                </p>
				<p>
                     Il permet de changer de police. Mais aussi de proposer des polices de remplacement si le navigateur ne trouve pas la police demandée: pour se faire, on ajoute d'autres noms de polices ou de types de police à la suite.
                    <br>Valeurs : <code>'Nom de police'</code> ou <code>'type de police'</code> séparés par des virgules.
                </p>
				<div class="example">
					<div class="code-box">
						<pre>
p {
	font-family: 'Helvetica', Arial, Sans-serif;
}
						</pre>
					</div>
                    <p>
                        Ici, on veut de l'Helvetica. Si il n'y en a pas, il va chercher de l'Arial. Et si il ne trouve toujours pas. Il sélection une police sans empattements disponible sur l'ordinateur.
                    </p>
				</div>
                <p>
                    Les <code>'</code> autour du nom de police ne sont nécessaire que si le nom continent des espaces ou autres caractères spéciaux.
                </p>
				<p class="exercice">
					Teste le css de l'exemple!
				</p>
                <p>A la question: "Il y a quoi comme police qu'on peut mettre?", 
                    on vous répond: <a href="https://fonts.google.com/" >GOOGLE FONTS</a>! <br>
                    Rends-toi y et on t'explique comment faire!</p>
                
                <div class="col-12 col-md-10 offset-md-1">
                    <img class="img-fluid" src="<?=img_url("seance10/gfont1", "jpg");?>" alt="illustration google fonts 1">
                </div>
                <ol>
                    <li>
                        La case "Search" entourée en fluo te permet de chercher un nom de police. Si tu ne sait pas quoi prendre, navigues dans les catégories (sous la barre "Search").
                    </li>
                    <li>
                        Pour ajouter une police qui te plait, clique le bouton <i style="color: blue">"+" entouré en bleu</i> à coté de ta police. <br>
                        Tu peux ajouter autant de polices que tu veux!
                    </li>
                    <li>
                        Cliques sur "Families selected" <i style="color: green">(flèche verte)</i>.
                    </li>
                </ol>
                <div class="col-12 col-md-10 offset-md-1">
                    <img class="img-fluid" src="<?=img_url("seance10/gfont2", "jpg");?>" alt="illustration google fonts 2">
                </div>
                <ol start="4">
                    <li>
                        Copies ensuite ce qui est <i style="color: red">entouré en rouge</i> dans la section <code>&lt;head&gt;</code> de ta page web
                    </li>
                    <li>
                        Utilises les lignes de CSS pointées en bleue dans ton code CSS pour voir la police s'afficher!
                    </li>
                </ol>
                <p style="font-size: 0.8rem">
                    Tu peux aussi télécharger ta police sur ton pc pour la tester ou t'en servir dans des documents <i style="color: limegreen">en cliquant sur l'icone entourée en vert</i>; c'est utile pour faire de jolies diapositives!
                </p>
                <p>
                    Additionnellement, Google Fonts permet aussi de prendre les variantes en gras ou en italique des polices en allant dans l'onglet "CUSTOMIZE".
                </p>
				<div class="example">
                    <p>
                        Page HTML:
                    </p>
					<div class="code-box">
						<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;

	&lt;head&gt;
		&lt;meta charset="utf-8"&gt;				
		&lt;title&gt;xXxCoolZoneDu92xXx&lt;/title&gt;
		<b>&lt;link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"&gt;</b>
		&lt;link rel="stylesheet" href="css/style.css"&gt;
	&lt;/head&gt;
	
	&lt;body&gt;
		&lt;p&gt;Page riche en contenu intéressant&lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt;
						</pre>
					</div>
                    <p>
                        Dans le css/style.css de la page:
                    </p>
					<div class="code-box">
						<pre>
p {
	font-size:      2em;
	<b>font-family:   'Indie Flower', cursive;</b>
}
						</pre>
					</div>
                </div>
                <p class="exercice">
					Rajoute ce qui est en <b>gras</b> dans ton site d'après l'exemple!
                    <br>Choisis ta police!
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les balises div</h1>
                <blockquote cite="<?=site_url("/seances/seance/seance29032019")?>" style="background: #eee; border-radius: 5px; padding: 0.5em; margin: 2em">
                    <p>
                        Aux débuts du Web, le W3C créa le <code>&lt;div&gt;</code>. Et les Webmasters furent libre de de <code>div</code>iser leur site en sections.
                    </p>
                    <cite>- Nous, Déficode 2019, colorisé</cite>
                </blockquote>
                <p>
                    Les balises <code>&lt;div&gt;</code> permettent de définir des sections dans un site. On les rend plus spécifiques en leur attribuant une <code>class</code> ou un <code>id</code>.
                </p>
                <p>
                    Cela permet d'arranger des éléments sur la page avec le CSS.
                </p>
                <div class="example">
                    <p>
                        Exemple de div sur <a href="<?=site_url("/templates/template/objectif")?>" >le site "objectif"</a>:
                    </p>
                    <div class="col-12 col-md-10 offset-md-1">
                        <img class="img-fluid" src="<?=img_url("seance10/divs");?>" alt="D.I.V. (Directon Interdépartementale des Vol-au-vent)">
                    </div>
                    <p>
                        En HTML:
                    </p>
					<div class="code-box">
						<pre>
&lt;div id="services"&gt;
    &lt;div class="services_item"&gt;
        &lt;i class="far fa-calendar-alt fa-4x"&gt;&lt;/i&gt;
        &lt;p&gt;
            J'organise plein de faux événements : raclette dans le Sahara, manifestation contre les manifestations en Corée du Nord, chasse à la loutre en Russie, end of thinking capacity. Voici la &lt;a href="#"&gt;liste des événements&lt;/a&gt; à ne pas manquer !
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="services_item"&gt;
        &lt;i class="fas fa-utensils fa-4x"&gt;&lt;/i&gt;
        &lt;p&gt;
            Je tiens un restaurant où tu peux manger : du boudin de gerbilles, du steack de bambous, de la cuisse de koala au miel, etc. La carte de &lt;a href="#"&gt;mon restaurant&lt;/a&gt; !
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="services_item"&gt;
        &lt;i class="fas fa-couch fa-4x"&gt;&lt;/i&gt;
        &lt;p&gt;
            J'ai créé une boutique de meubles faits de : bouteilles en plastique, brindilles, poussière et de chewing-gums mâchés récupérés sur le sol du métro. La liste des &lt;a href="#"&gt;meubles&lt;/a&gt; de ma boutique !
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
                        </pre>
                    </div>
                </div>
                <p class="exercice">
					Essaie de structurer tes paragraphes avec des <code>&lt;div&gt;</code>!
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Les balises HTML 5</h1>
				<p>
					Le HMTL évolue au fil du temps, la dernière norme est "HTML 5". Elle ajoute entre-autres ces balises afin de limiter l'utilisation de div et donner plus de sens aux structures des pages web:
				</p>
				<ul>
                    <li><code>&lt;main&gt;</code><br> Il groupe les éléments les plus importants qui sont souvent exclusifs à cette page web.</li>
                    <li><code>&lt;section&gt;</code><br>
                        Il groupe les éléments réalisant une fonction du site. Par exemple: la  recherche d'horaire d'un site de transports en commun</li>
                    <li><code>&lt;article&gt;</code><br>
                        Portion de page qui a un sens même sans lire le reste de la page web</li>
                    <li><code>&lt;nav&gt;</code><br>
                        Possède des liens vers d'autres portions du site ou de la page elle-même. Dans un <code>&lt;article&gt;</code>, cette section permettrait de naviguer entre ses paragraphes. </li>
                    <li><code>&lt;aside&gt;</code><br>
                        Section dont le contenu est un complément par rapport à ce qui l'entoure, qui n'est pas forcément en lien direct avec le contenu mais qui peut apporter des informations supplémentaires.</li>
                    <li><code>&lt;header&gt;</code><br>
                        Section d'introduction d'un article, d'une autre section ou du document entier (en-tête de page).</li>
                    <li><code>&lt;footer&gt;</code><br>
                        Section de conclusion d'une section ou d'un article, voire du document entier (pied de page).</li>
				</ul>
                <div class="example">
					<div class="code-box">
						<pre>
&lt;body&gt;
    &lt;header&gt;
    &lt;h1&gt;Mon super site&lt;/h1&gt;
    &lt;div id="SuperBanière"&gt;&lt;/div&gt;
    &lt;p&gt;Rencontre du W-T-F&lt;/p&gt;
    &lt;nav&gt;
        &lt;ul&gt;
            &lt;li&gt;lien vers un autre endroit du site&lt;/li&gt;
            &lt;li&gt;chez Momo&lt;/li&gt;
            &lt;li&gt;echange de billes&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;
    &lt;/header&gt;
    
    &lt;main&gt;
        &lt;section&gt;
            &lt;h1&gt; Tutos de JM&lt;/h1&gt;
            &lt;article&gt;
            
                &lt;header&gt;
                    &lt;h1&gt;Faire du lolz avec les pc&lt;/h1&gt;
                &lt;/header&gt;
                &lt;main&gt;
                    &lt;h2 id="art-1"&gt;p c'est la life&lt;/h2&gt;
                    &lt;p&gt;ppp&lt;/p&gt;
                    &lt;h2 id="art-2"&gt;p c'est la life 2, le retour du roi&lt;/h2&gt;
                    &lt;p&gt;ppp ppp&lt;/p&gt;
                &lt;/main&gt;
                &lt;aside&gt;
                    &lt;h1&gt;Fantastique auteur de l'article&lt;/h1&gt;
                    &lt;h2&gt;Jean MICHEL&lt;/h2&gt;
                    &lt;div id="imageDeJeanMich"&gt;&lt;/div&gt;
                    &lt;p&gt;Je fais du web. . . ou pas!&lt;/p&gt;
                &lt;/aside&gt;
                &lt;footer&gt;
                    &lt;h1&gt;sommaire&lt;/h1&gt;
                    &lt;nav&gt;
                        &lt;ul&gt;
                            &lt;li&gt;&lt;a href="#art-1"&gt;p c'est la life&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="#art-2"&gt;p c'est la life 2&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/nav&gt;
                &lt;/footer&gt;
                
            &lt;/article&gt;
            &lt;article&gt;

                &lt;h1&gt;Faire du lolz avec les serveurs&lt;/h1&gt;
                &lt;p&gt;...etc...&lt;/p&gt;
                
            &lt;/article&gt;
        &lt;/section&gt;
    &lt;/main&gt;
    
    &lt;aside&gt;
        &lt;h1&gt;Thème du site&lt;/h1&gt;
        &lt;p&gt;faire des rouleaux de printemps avec ton cartable et tes ciseaux&lt;/p&gt;
    &lt;/aside&gt;
    
    &lt;footer&gt;
        &lt;nav&gt;
            &lt;h1&gt;Carte du site&lt;/h1&gt;
            &lt;ul&gt;
                &lt;li&gt;par ici&lt;/li&gt;
                &lt;li&gt;par là-bas&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/nav&gt;
        &lt;adress&gt;Comment me contacter&lt;/adress&gt;
        &lt;section class="legal"&gt;
            &lt;p&gt;informations légales&lt;/p&gt;
            &lt;p&gt;plus d'informations légales&lt;/p&gt;
        &lt;/section&gt;
        
    &lt;/footer&gt;
&lt;/body&gt;
						</pre>
					</div>
				</div>
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
				<h1>On commence le site projet</h1>
				<div class="exercice">
				<p>
					Voici une capture d'écran de la page objectif. On a entouré les différentes séparations du site.
				</p>
				<ul>
					<li>Orange : le <code>main</code> qui entoure tout</li>
					<li>Rose : le <code>header</code> qui entoure le menu et la première partie</li>
					<li>Bleu <b>clair</b> : le <code>nav</code></li>
					<li>Vert : les difféfentes <code>section</code></li>
					<li>Bleu <b>foncé</b> et jaune : des <code>div</code></li>
				</ul>
				<p>
					Crée un dossier <span class="file">projet</span> et rajoute un <span class="file">index.html</span> dedans (tu peux télécharger
					<a href="<?= code_url("seance8/template", "html");?>" download="index.html">ce template</a> qui contient
					une page HTML de base).
				</p>
				<p>
					Le but est de structurer ton site de la même manière qu'est structurée la page objectif. Tu dois utiliser des balises <code>div</code>,
					<code>main</code>, <code>header</code>, <code>nav</code>, <code>section</code>. On ne te demande pas de mettre des images ou du texte, juste de structurer avec ces balises.
				</p>
				</div>
				<div class="col-12 col-md-10 offset-md-1 mt-4">
                    <img class="img-fluid" src="<?=img_url("seance10/objectif_screenshot");?>" alt="Screenshot du site objectif" style="border : 3px solid black;">
                </div>
				<div class="exercice">
					<p>
						Tu peux commencer à rajouter des <code>p</code> et des <code>h1</code> et ainsi que modifier la police etc.
					</p>
				</div>
			</div>
		</div>

	</div>
</main>
