
<main class="container-fluid below-menu" id="main">
	<div class="container">

	
	<div class="row white-box">
			<div class="col-12">
				<h2>Les objets</h2>
				<p>
					Pour rappel, la POO consiste à considérer des objets et leur définition. 
				</p>
				<p>
					Un chat noir et un chat blanc sont deux objets différents, mais ils ont la même définition.
				</p>
				<p class="warning">
					En POO, tout peut être un objet : une table, un chat, Napoléon etc. 
				</p>
				<p>
					En POO la définition d'un objet s'appelle sa classe, et les objets sont appelés des instances. 
				</p>
				<p class="example">
					Un chat noir et un chat blanc sont des instances de la classe Chat. 
				</p>
				<p>
					Jusqu'ici, Python et Javascript sont similaires. Ils différent énormément pour lé création d'objets !
				</p>
				<p>
					Voici comment on fait en Python :
				</p>
				<div class="code-box">
					<pre>
class Chat :
	def __init__(self, couleur, nom, age):
		self.nom = nom
		self.couleur = couleur
		self.age = age

monchat = Chat("Salem", "Noir", 8)
					</pre>
				</div>
				<p>
					Voici la même création en JS :
				</p>
				<div class="code-box">
					<pre>
let monchat = {
	nom : "Salem",
	couleur : "Noir",
	age : 8
};
					</pre>
				</div>
				<p>
					En Python, on définit d'abord la classe puis après on crée une instance. En JS, on peut faire les deux en même temps !
				</p>
				<p>
					Ici, on a créé le chat avec le "=" tout en le définissant avec les accolades.
				</p>
				<p>
					La syntaxe d'un objet JS est très proche de la syntaxe CSS, avec les propriétés à gauche et les valeurs à droite. Mais en 
					CSS, on sépare chaque propriété par un point virgule, alors que c'est une virgule en JS.
				</p>
				<p>
					Une fois l'objet défini, on peut accéder à ses atributs comme en Python, avec un point :
				</p>
				<p class="example">
					<code>console.log("Mon chat est", monchat.couleur);</code>
				</p>
				<p class="example">
					<code>monchat.cage = 12;</code>
				</p>
				<p>
					Un objet peut avoir comme attribut un autre objet :
				</p>
				<div class="example">
				<div class="code-box">
					<pre>
let monchat = {
	nom : "Salem",
	couleur : "Noir",
	age : 8,
	nourriture : {
		type : "Croquettes",
		gout : "Saumon"
	}
};
					</pre>
				</div>
				<p>
					<code>console.log(monchat.nourriture.gout);</code>
				</p>
				</div>
				<p>
					Il ne faut pas oublier que les objets peuvent avoir des méthodes, voici comment on les définit en JS :
				</p>
				<div class="code-box">
					<pre>
let monchat = {
	nom : "Salem",
	couleur : "Noir",
	age : 8,
	nourriture : {
		type : "Croquettes",
		gout : "Saumon"
	},

	vieillir() {
		console.log("Mon chat vieillit");
		this.age++;
		console.log("Il a", this.age, "ans");
	},

	changerNom(nouveaunom) {
		console.log("Mon chat change de nom");
		this.nom = nouveaunom;
		console.log("Il s'appelle", this.nom);
	}
};

monchat.vieillir()
monchat.changerNom("Garfield");
					</pre>
				</div>
				<div class="exercice">
					<p>
						Recopie et exécute ce code.
					</p>
				</div>
				<p>
					On peut donner des paramètres aux méthodes, utiliser return dedans. Pour accéder aux attributs de l'objet, on utilise 
					le mot-clé <code><b>this</b></code> (en Python, self).
				</p>
				<p>
					Depuis récement, on peut créer des classes dans JS. Mais on ne le fera pas, trop compliqué pour débuter.
				</p>
				<h2>Les listes</h2>
				<p>
					Comme en Python, il y a des listes en JS.
				</p>
				<div class="code-box">
					<pre>
let liste = ["Bonjour", 7, { message: "Coucou maman" }, true];

// Taille de la liste 
console.log(liste.length);

// Accès au dernier et premier élément
console.log(liste[liste.length - 1])
console.log(liste[0])

// Ajout d'un élément
liste.push("bibi");

//  Suppression du dernier élément
liste.pop()

// Parcours
for (let i = 0; i < liste.length; i++) {
  console.log(liste[i]);
}
					</pre>
				</div>

				<div class="exercice">
				<p>
					Ecris une fonction qui prend un nombre en argument et renvoie la liste des nombres allant de 0 à ce nombre. Par exemple creerListe(5) renvoie 
					[0, 1, 2, 3, 4, 5].
				</p>
				<p>
					Ecris une fonction qui prend une liste de nombres et affiche leur somme.
				</p>
				<p>
					Affiche la somme des nombres de 0 à 5000.
				</p>
				</div>
		</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Parcours du DOM</h1>
				<p>
					Le DOM est l'abbrévation de Document Object Model. Il s'agit de la structure d'une page web, voici un DOM :
				</p>
				<p>
					L'accès au DOM en JS se fait avec la varibale globale <code><b>document</b></code>. Cette variable existe déjà, pas besoin de la créer !
				</p>
				<div class="col-12 col-md-10 offset-md-1">
					<img class="img-fluid" src="<?=img_url("p3/seance3/html-dom-tree", "gif");?>" alt="https://www.tutorialrepublic.com/lib/images/html-dom-tree.gif">
				</div>
				<p>
					Les fichiers JS ont pour extension <b>.js</b>.
				</p>
				<p>
					Pour importer un fichier JS dans une page web, on place une balise <code>script</code>, dans le <code>body</code> (à la fin) et dont
					l'attribut <code>src=""</code> a pour valeur le lien vers le script.
				</p>
				<p class="example">
					<code>&lt;script src=&quot;test.js&quot;&gt;&lt;/script&gt;</code>
				</p>
				<div class="exercice">
					<p>
						Ouvre Brackets et crée un dossier <span class="file">monsitejs</span>.
						Télécharge
						<a href="<?= code_url("seance8/template", "html");?>" download="index.html" title="Inspiré du cours d'Open classrooms">ce fichier</a> et place le dans ton dossier
						monsitejs. 
					</p>
					<p>
						Regarde à l'intérieur de ce fichier, tu peux remarquer la ligne d'import du script tout en bas.
						Durant tous les exercices, je t'invite à comparer le résultat de la page sur Mozilla et ce qui est réellement écrit dans le
						fichier HTML. Cela te permettra de comprendre ce que l'on peut faire avec JS.
					</p>
					<p>
						Crée un fichier <span class="file">test.js</span> et place le dans ton dossier monsitejs. 
					</p>
					<p>
						Tape ce code dans ton fichier JS :
					</p>
					<div class="code-box">
						<pre>
let head = document.head; // La variable head contient l'objet head du DOM
console.log(head);

let body = document.body; // La variable body contient l'objet body du DOM
console.log(body);
						</pre>
					</div>
					<p>
						Ouvre ta page index.html dans Google ou Mozilla, appuie sur la touche <kbd>F12</kbd> et ouvre l'onglet "Console".
					</p>
					<div class="col-12 col-md-10 offset-md-1">
						<img class="img-fluid" src="<?=img_url("p3/seance3/console", "png");?>" alt="https://www.tutorialrepublic.com/lib/images/html-dom-tree.gif">
					</div>
				</div>

				<h2>Sélection d'éléments selon leur balise</h2>
				<p>
					Si je veux prendre tous les <code>h2</code> de ma page, je peux avec ce code :
				</p>
				<p class="example">
					<code>let touslesh2 = document.getElementsByTagName("h2"); // Tous les titres h2</code>
				</p>
				<p>
					<code>getElementsByTagName</code> renvoie une <b>liste</b> d'éléments. On peut donc la parcourir, afficher sa longueur etc.
				</p>
				<div class="exercice">
					<p>
						Modifie ton code test.js pour qu'il sélectionne tous les éléments <code><b>li</b></code> de la page.
					</p>
					<p>
						Puis parcours et affiche tous ces éléments dans une boucle.
					</p>
				</div>

				<h2>Sélection d'éléments selon leur classe</h2>
				<p>
					Si je veux prendre tous les éléments dont la classe est <code>merveilles</code> de ma page, je peux avec ce code :
				</p>
				<p class="example">
					<code>let lesmerveilles = document.getElementsByClassName("merveilles"); // Tous les éléments ayant la classe "merveilles"</code>
				</p>
				<p>
					<code>getElementsByClassName</code> renvoie une <b>liste</b> d'éléments. On peut donc la parcourir, afficher sa longueur etc.
				</p>
				<div class="exercice">
					<p>
						Modifie ton code test.js pour qu'il sélectionne tous les éléments ayant pour classe <code><b>pasdetruite</b></code> de la page.
					</p>
					<p>
						Affiche la phrase suivante : "Il y a encore NOMBRE merveilles qui ne sont pas détruites", en remplaçant NOMBRE par le nombre de merveilles qui existent encore.
					</p>
				</div>

				<h2>Sélection d'un élément selon son identifiant</h2>
				<p>
					On rappelle que contrairement aux classes, les ids sont <b>uniques</b> ! Dans index.html, il y a plusieurs classes <code>merveilles</code>,
					mais un seul id <code>antiques</code>.
				</p>
				<p>
					Si je veux prendre l'élément ayant pour id <code>antiques</code> de ma page, je peux avec ce code :
				</p>
				<p class="example">
					<code>let antiques = document.getElementById("antiques"); // l'élément ayant pour id "antiques"</code>
				</p>
				<p>
					<code>getElementById</code> renvoie <b>un</b> élément. On ne peut donc <b>pas</b> le parcourir, afficher sa longueur etc.
				</p>

				<h2>Sélection d'éléments à partir d'un sélecteur CSS</h2>
				<p>
					En CSS, si je veux récuperer tous les <code>span</code>, contenus dans un <code>a</code>, contenu
					dans un élément ayant pour id <code>conteneur</code>, j'écris : <code>#conteneur a span</code>.
				</p>
				<p>
					Pour sélectionner les mêmes éléments avec JS, j'écris : 
				</p>
				<p class="example">
					<code>let css = document.querySelectorAll("#conteneur a span");</code>
				</p>
				<div class="exercice">
					<p>
						Affiche la phrase suivante : "Il y a encore NOMBRE merveilles antiques qui ne sont pas détruites", en remplaçant NOMBRE par le nombre de merveilles <b>antiques</b> qui existent encore.
					</p>
					<p>
						Affiche la phrase suivante : "Il y a encore NOMBRE merveilles nouvelles qui ne sont pas détruites", en remplaçant NOMBRE par le nombre de merveilles <b>nouvelles</b> qui existent encore.
					</p>
				</div>

				<p>
					On peut aussi utiliser la méthode <code>querySelector</code>, qui ne renvoit que le <b>premier</b> élément de la liste.
				</p>
				<p class="example">
					<code>let li = document.querySelector("li"); // premier li de la page</code>
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<h1>Manipulation du DOM</h1>
				<h2>Modifier les attributs d'éléments</h2>
				<p>
					Si je veux modifier l'attribut id du premier h1, je peux grâce ce code :
				</p>
				<p class="example">
					<code>document.querySelector("h1").setAttribute("id", "titre");</code>
				</p>
				<div class="exercice">
					<p>
						Crée un fichier style.css et rajoute ce code dedans :
					</p>
					<div class="code-box">
						<pre>
#titre {
    border: 3px solid blue;
}

.green {
    color : green;
}

.italic {
    font-style: italic;
}
						</pre>
					</div>
					<p>
						Lie ton fichier html et css (avec une balise <code>link</code> dans le header).
					</p>
					<p>
						Regarde le résultat sur Mozilla, il ne se passe rien !
					</p>
					<div class="col-12 col-md-10 offset-md-1">
						<img class="img-fluid" src="<?=img_url("p3/seance3/title", "png");?>">
					</div>
					<p>
						Efface ton code test.js et rajoute ces lignes : <code>let h1 = document.querySelector("h1");</code>
						et <code>h1.setAttribute("id", "titre");</code>
					</p>
					<p>
					Affiche ta page sur Mozilla . Quelle différence y'a-t-il 
						sur le titre "Les sept merveilles du monde" ?
					</p>
					<p>
						Qu'ont fait les lignes de code qu'on a rajoutées ?
					</p>
				</div>

				<h2>Modifier les classes</h2>
				<p>
					Quand on a un élément, on peut récupérer toutes ses classes avec <code>.classList</code>.
				</p>
				<p class="example">
					<code>console.log(document.querySelector("h1").classList);</code>
				</p>
				<p>
					Il s'agit d'une liste, on peut donc rajouter, supprimer des éléments etc.
				</p>
				<div class="exercice">
					<p>
						Rajoute les lignes de codes suivantes dans test.js :
					</p>
					<div class="code-box">
						<pre>
console.log(h1.classList);
h1.classList.remove("ne-sert-a-rien");

h1.classList.add("green");
h1.classList.add("italic");
console.log(h1.classList);
						</pre>
					</div>
					<p>
					Affiche ta page sur Mozilla . Quelles différences y'a-t-il 
						sur le titre "Les sept merveilles du monde" ? Qu'est-il affiché dans la console (<kbd>F12</kbd>) ?
					</p>
					<p>
						Qu'ont fait les lignes de code qu'on a rajoutées ?
					</p>
					<p>
						Ecris un code pour rajouter à chaque merveilles pas détruites la classe <code>green</code>. Tu devras utiliser <code>querySelectorAll</code> et parcourir la liste que renvoie cette méthode.
					</p>
				</div>

				<h2>Modification du texte</h2>
				<p>
					Si je veux modifier le texte d'un élément, je modifie la variable <code>textContent </code> de cet élément.
				</p>
				<p class="exercice">
					Rajoute cette ligne à ton code test.js : <code>h1.textContent = "Les sept merveilles du monde, les anciennes et les nouvelles";</code>
				</p>

				<h2>Ajout d'éléments dans le DOM</h2>
				<p>
					L'ajout d'un élément se fait en 3 étapes :
				</p>
				<ol>
					<li>Création de l'élément</li>
					<li>Ajout d'information dans l'élément</li>
					<li>Insertion de l'élément</li>
				</ol>
				<p>
					La création se fait avec la méthode <code>document.createElement("tag")</code> où remplace "tag" par 
					la type de balise, exemple de création d'un paragraphe :
				</p>
				<p class="example">
					<code>let nouveauP = document.createElement("p");</code>
				</p>
				<p>
					L'ajout d'informations : on rajoute du texte dans l'élément, ainsi que ses classes, son id, ses attributs etc.
				</p>
				<p class="example">
					<code>nouveauP.textContent = "Ceci est mon nouveau paragraohe";</code>
				</p>
				<p>
					L'insertion : On sélectionne un élément de référence. Puis on appelle sa méthode <code>.insertAdjacentElement(position, element)</code>.
				</p>
				<p>
					La <code>position</code> est une string qui peut valoir :
				</p>
				<ul>
					<li>"beforebegin" : je veux insérer mon élément juste avant</li>
					<li>"afterbegin" : je veux insérer mon élément au début, <b>dans l'élément de référence</b></li>
					<li>"beforeend" : je veux insérer mon élément à la fin, <b>dans l'élément de référence</b></li>
					<li>"afterend" : je veux insérer mon élément juste après</li>
				</ul>
				<p>
					La deuxième variable est l'élément qu'on veut insérer.
				</p>
				<p class="example">
					<code>document.querySelector("#contenu h2").insertAdjacentElement("afterend", nouveauP); // Insertion du nouveau paragraphe juste après le h2</code>
				</p>
				<div class="exercice">
					<p>
						Rajoute dans ton code ces lignes suivantes :
					</p>
					<div class="code-box">
						<pre>
// 1 CREATION ELEMENT
let nouvelElement = document.createElement("h3"); // Création d'un titre h3

// 2 AJOUT D'INFORMATIONS
nouvelElement.textContent = "Cette liste nous vient de l'Antiquité.";
nouvelElement.classList.add("italic");

// 3 INSERTION
document.querySelector("#contenu h2").insertAdjacentElement("afterend", nouvelElement);
						</pre>
					</div>
				</div>

				<h2>Supprimer un noeud existant</h2>
				<p>
					Pour supprimer les nouvelles merveilles du monde j'écris :
				</p>
				<p class="exercice">
					Ecris dans ton code : <code>document.getElementById("contenu").removeChild(document.getElementById("nouvelles"));</code>
				</p>
				<p>
					On utilise la méthode remove et on donne le noeud à supprimer.
				</p>
			</div>
		</div>

		<div class="row white-box">
			<div class="col-12">
				<div class="exercice">
				<p>
					Crée un dossier <span class="file">monsite2js</span>.
					Télécharge
					<a href="<?= code_url("seance16/exercice", "html");?>" download="index.html">ce fichier</a> et place le dans ton dossier
					monsite2js. 
				</p>
				<p>
					Crée les fichiers style.css et script.js.
				</p>
				<p>
					En ne modifiant <b>que</b> style.css et script.js, fais en sorte que la page ressemble à ça :
				</p>
				<div class="col-12 col-md-10 offset-md-1">
						<img class="img-fluid" src="<?=img_url("p3/seance3/result", "png");?>">
					</div>
				</div>
				<a href="<?= code_url("seance16/script", "js");?>" style="display : none;">Solution</a>
			</div>
		</div>

	</div>
</main>
