<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="container-fluid below-menu" id="main">
	<div class="container">
	<div class="row  white-box">
			<div class="col-12">
			<h1>Récap' de la séance 2</h1>
			</div>
	</div>
		<div class="row  white-box">
				<div class="col-12">
					<h1>Les chaînes de caractères et la commande <code>print</code></h1>
					<p>
						On a vu que l'on peut stocker des nombres dans des variables.
					</p>
					<p>
						On peut aussi stocker des phrases. En informatique, une phrase est appelée une <strong>chaîne de caractères</strong>
						ou une <strong>string</strong>.
					</p>
					<p>
						En Python, les strings sont entourées du symbole <strong>"</strong> (sur la touche 3 du clavier).
					</p>
					<div class="example">
					<div class="code-box">
						<pre>
phrase = "Bonjour je m'appelle Nicolas."
						</pre>
					</div>
					</div>
					<p class="warning">
						Les guillemets sont importants. On met des guillemets parce que Python ne connait pas les mots tels que bonjour et je.
					</p>
					<p>
						On peut changer dynamiquement des strings grâce à la commande <code>format</code>.
					</p>
					<p>
						La commande <code>print</code> permet d'afficher une expression à l'écran (une variable, un nombre etc.).
					</p>
				</div>
			</div> <!-- END ROW -->
			<div class="row white-box">
				<div class="col-12">
					<h1>Les booléens</h1>
					<p>
						On a vu qu'on peut mettre des nombres et des string dans des variables.
					</p>
					<p>
						On peut aussi y mettre des <strong>booléens</strong>.
					</p>
					<p>
						Un booléen permet de dire si quelque chose est vrai ou faux. Il ne peuvent donc avoir que deux valeurs : <strong>True</strong>
						et <strong>False</strong>.
					</p>
					<p class="warning">
						Certaines expressions peuvent être des booléens cachés : 15 < 16 est une comparaison, qui vaut True.
					</p>
					<p>
					On peut combiner les booléens ensembles grâce aux mots-clés <code>and</code>, <code>or</code> et <code>not</code>.
				</p>
					<p class="warning">
						<code>or</code> est <strong>inclusif</strong> contrairement au français. Quand on dit "Entrée OU dessert", c'est l'un ou l'autre, <strong>pas les deux</strong>. Ce <strong>ou</strong>
						est <strong>exclusif</strong>. En Python quand on dit "roi or trefle", on peut avoir l'un ou l'autre, ou <strong>les deux</strong>.
					</p>
				</div>
			</div><!-- END ROW -->
			<div class="row white-box">
				<div class="col-12">
					<h1>La programmation orientée objets (POO) : Classes et instances</h1>
					<p>
						La POO consiste à considérer des <strong>objets</strong> et leur <strong>définition</strong>.
					</p>
					<p>
						Un chat noir et un chat blanc sont deux objets différents, mais ils ont la même définition.
					</p>
					<p class="warning">
						En POO, <strong>tout</strong> peut être un objet : une table, un chat, Napoléon etc.
					</p>
					<p>
						En POO la définition d'un objet s'appelle sa <strong>classe</strong>, et les objets sont appelés des <strong>instances</strong>.
					</p>
					<p class="example">
						Un chat noir et un chat blanc sont des instances de la classe Chat.
					</p>
					<p>
						En Python, pour créer une classe, on utilise le mot <code>class</code>.
					</p>
					<p>
						Pour créer des instances, on définit la fonction <code>__init__</code> dans la classe.
					</p>
					<p>
						<code>__init__</code> est appelée le <strong>constructeur</strong> de la classe. Il sert à définir ce qu'il se passe lors que l'on
						<strong>crée</strong> un objet. Il a <strong>toujours au moins un argument</strong> : <code>self</code>.
					</p>
					<p>
						On stocke les instances dans des variables. Pour créer une instance, on écrit le nom de la classe suivi de parenthèses.
					</p>
				</div>
			</div><!-- END ROW -->
			<div class="row white-box">
				<div class="col-12">
					<h1>POO : Les attributs</h1>
					<p>
						Un chat possède une couleur qui lui est propre.
					</p>
					<p>
						Les choses que possède un objet s'appellent ses <strong>attributs</strong> (ou ses champs).
					</p>
					<p>
						Pour accéder à un attribut d'un objet, on écrit :
					</p>
					<ul>
						<li>Dans la classe : <code>self.[nom de l'attribut]</code> (self veut dire "soi", donc ici on dit "son attribut à soi")</li>
						<li>En dehors : <code>[nom de l'objet].[nom de l'attribut]</code></li>
					</ul>
					<p>
						On peut initialiser les attributs d'un objet dans son constructeur.
					</p>
					<p>
						On rajoute dans les arguments du constructeur les données que l'on veut utiliser quand on crée une instance.
					</p>
					<p>
						On initialise les attributs de l'objet en écrivant : <code>self.[attribut] = valeur</code>.
					</p>
					<p class="example">
						self.couleur = couleur
					</p>
					<p>
						Pour créer les instances, on met dans les parenthèses les valeurs dans le même ordre que le constructeur.
					</p>
					<p class="example">
						chatNoir = Chat("Noir")
					</p>
					<p class="warning">
						On n'écrit pas le self lors de l'instanciation !
					</p>
					<p>
						Enfin on peut accéder à un attribut en écrivant <code>[nom de l'objet].[nom de l'attribut]</code>.
					</p>
					<p class="example">
						chatBlanc.couleur
					</p>
				</div>
			</div><!-- END ROW -->

			<div class="row white-box">
				<div class="col-12">
					<h1>POO : Les méthodes</h1>
					<p>
						Un chat peut miauler.
					</p>
					<p>
						On appelle <strong>méthode</strong> ce qu'un objet peut faire. C'est une fonction dans une classe.
					</p>
					<p>
						Pour utiliser une méthode d'un objet, on écrit :
					</p>
					<ul>
						<li>Dans la classe : <code>self.[nom de la méthode](argument1, argument2 ...)</code> (On doit passer les bons arguments, s'il y en a)</li>
						<li>En dehors : <code>[nom de l'objet].[nom de la méthode](argument1, argument2 ...)</code></li>
					</ul>
					<p>
						On définit une méthode comme une fonction. Celle-ci se place <strong>dans</strong> la classe. Comme le constructeur, on doit mettre le <strong>self</strong>.
					</p>
					<p>
						Les méthodes peuvent être appelées de partout, et peuvent prendre des arguments.
					</p>
				</div>
			</div><!-- END ROW -->
			<div class="row white-box">
				<div class="col-12">
					<h1>POO : La composition</h1>
					<p>
						Quand un objet possède un autre objet, on dit qu'on les compose.
					</p>
					<p>
						Par exemple, un maître possède un chat.
					</p>
					<p>
						Quand un objet en possède un autre, il peut utiliser ses méthodes.
					</p>
					<p class="example">
						Le maitre possède le chat. Il peut appeler sa méthode <code>MiaulerPleinDeFois</code>.
					</p>
				</div>
			</div><!-- END ROW -->
			<div class="row white-box">
				<div class="col-12">
					<h1>Un peu de Turtle</h1>
					<p>
						Les turtles sont des objets, on peut en créer en écrivant <code>trt.Turtle()</code>.
					</p>
						<p>
							<code>goto</code> permet à la turtle d'aller à un endroit de l'écran.
						</p>
						<p>
							<code>penup</code> empêche la turtle de dessiner.
						</p>
						<p>
						<code>pendown</code> permet à la turtle de dessiner.
						</p>
						<p>
							<code>pensize</code> change l'épaisseur du trait.
						</p>
				</div>
				
				</div><!-- END ROW -->
			</div>
</main>
