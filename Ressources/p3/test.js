let h1 = document.querySelector("h1");
h1.setAttribute("id", "titre");

console.log(h1.classList);
h1.classList.remove("ne-sert-a-rien");

h1.classList.add("green");
h1.classList.add("italic");
console.log(h1.classList);

let pasdetruites = document.querySelectorAll(".pasdetruite");

for (let index = 0; index < pasdetruites.length; index++) {
    const element = pasdetruites[index];
    element.classList.add("green");
}

h1.textContent = "Les sept merveilles du monde, les anciennes et les nouvelles";

// 1 CREATION ELEMENT
let nouvelElement = document.createElement("h3"); // Création d'un titre h3

// 2 AJOUT D'INFORMATIONS
nouvelElement.textContent = "Cette liste nous vient de l'Antiquité.";
nouvelElement.classList.add("italic");

// 3 INSERTION
document.querySelector("#contenu h2").insertAdjacentElement("afterend", nouvelElement);

document.getElementById("contenu").removeChild(document.getElementById("nouvelles"));