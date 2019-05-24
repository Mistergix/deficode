let h1 = document.createElement("h1");
let body = document.body;

h1.textContent = "Mon site créé en JS";
h1.setAttribute("id", "titre");

body.insertAdjacentElement("beforeend", h1);

let text = "";
for(let i = 1; i <= 50; i++){
	text += i + " ";
}

let p = document.createElement("p");

p.textContent = text;
p.classList.add("border");

body.insertAdjacentElement("beforeend", p);


let a = document.createElement("a");

a.textContent = "Lien vers Google (ouvre dans un autre onglet)";
a.setAttribute("href", "https://google.com");
a.setAttribute("target", "_blank");

body.insertAdjacentElement("beforeend", a);
