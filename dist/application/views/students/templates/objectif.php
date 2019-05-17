<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Nicolas RUCHE | Page personnelle</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="<?= css_url("p2/objectif"); ?>">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	</head>
	<body>
		<main>
			<header id="home">
				<nav id="mainMenu">
					<a href="#apropos">A propos</a>
					<a href="#services">Mes activités</a>
					<a href="#social">Réseaux sociaux</a>
				</nav>
				<div id="bandeau">
					<section id="contenu">
						<img src="<?=img_url("p2/nicolas", "jpg")?>" alt="Photo de profil">
						<h1>Nicolas <span class="text-secondary">RUCHE</span></h1>
						<h2><span class="lettrine">E</span>tudiant <span class="lettrine">E</span>ntrepreneur</h2>
						<h3 class="italic">Ce site est factice</h3>
						<a class="bouton" href="https://www.youtube.com/watch?v=Jkyy4JOu9jE&list=PLYH8WvNV1YEn_iiBMZiZ2aWugQfN1qVfM" target="_blank">Les memes du jour</a>
					</section>
				</div>
			</header>

			<section id="apropos_section">
				<h1>
					A propos de moi
				</h1>
				<div id="apropos">
					<div class="image">
						<img src="<?=img_url("p2/cheval", "jpg")?>" alt="Moi en cheval avec mon pote en pigeon">
					</div>
					<div class="text">
						Je suis étudiant de 20 ans. J'aime bien manger, jouer aux jeux vidéo, mettre un masque de licorne arc-en-ciel. Je code beaucoup, je crée des entreprises qui marchent plus ou
						moins bien. J'aime pas étudier mais j'aime bien apprendre. La personne la plus proche devant est aussi la personne la plus loin derrière toi. Mange des brocolis.
						Les douches sont justes des chutes d'eau domestiquées.
						DBZ is better than DBS.
						Le nom de ma wifi est "Tell my Wi-Fi love her".
						Pile au moment où j'écris ces ligne, j'écoute <a href="https://youtu.be/rY0WxgSXdEE?t=71" target="_blank" rel="noopener noreferrer">cette musique</a>.
						J'en sais plus sur les memes que sur la politique.
						Si un jour t'es sur Linux, teste cette commande : <code>sudo rm -rf /</code> (sérieusement, si tu tiens à ton ordi le fais pas xD)
						Etc. (Pour ceux qui ne le savent pas etc. signifie "End of Thinking Capacity").
						Mange des brocolis.
					</div>
				</div>
			</section>

			<section id="services_section">
				<h1>
					Mes activités
				</h1>
				<div id="services">
					<div class="services_item">
						<i class="far fa-calendar-alt fa-4x"></i>
						<p>
							J'organise plein de faux événements : raclette dans le Sahara, manifestation contre les manifestations en Corée du Nord, chasse à la loutre en Russie, end of thinking capacity. Voici la <a href="#">liste des événements</a> à ne pas manquer !
						</p>
					</div>
					<div class="services_item">
						<i class="fas fa-utensils fa-4x"></i>
						<p>
							Je tiens un restaurant où tu peux manger : du boudin de gerbilles, du steack de bambous, de la cuisse de koala au miel, etc. La carte de <a href="#">mon restaurant</a> !
						</p>
					</div>
					<div class="services_item">
						<i class="fas fa-couch fa-4x"></i>
						<p>
							J'ai créé une boutique de meubles faits de : bouteilles en plastique, brindilles, poussière et de chewing-gums mâchés récupérés sur le sol du métro. La liste des <a href="#">meubles</a> de ma boutique !
						</p>
					</div>
				</div>
			</section>

			<footer id="social_section">
				<h1>
					Me suivre sur les réseaux sociaux
				</h1>
				<div id="social">
					<div class="social_item" id="facebook">
						<a href="https://www.facebook.com/nicolas.ruche.10" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook fa-3x"></i></a>
					</div>
					<div class="social_item" id="instagram">
						<a href="https://www.instagram.com/nicruche/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram fa-3x"></i></a>
					</div>
					<div class="social_item" id="twitter">
						<a href="https://twitter.com/Nicruche" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter-square fa-3x"></i></a>
					</div>
				</div>
			</footer>
		</main>
	</body>
</html>
