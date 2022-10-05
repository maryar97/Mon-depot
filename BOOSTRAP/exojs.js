//JS 05 Afficher du texte 
function Promptalert () { 
var nom = window.prompt("Entrez votre nom");
var prenom = window.prompt("Entrez votre prénom");
let _sexe = "Monsieur"

if ( window.confirm( "Etes vous une femme?" ) ) {
    _sexe = "Madame";
    // Code à éxécuter si le l'utilisateur clique sur "OK"
} 

  
    window.alert("Bonjour " + " " + _sexe + " " + prenom + " " + nom + " \n" + "Bienvenue sur notre site !"); 
                  

}

// JS 08 Les Boucles

function PromptMessage() {

    document.write("Reponse entrée");
    let reponse ; 
    const lachaine="aeiouy";
    let compteur = 0;
  

    reponse = window.prompt("Indiquez une ou plusieurs voyelle(s):");

    //une boucle
    for (var i = 0; i <= reponse.length - 1; i++) {
  
        if (lachaine.indexOf(reponse[i]) !== -1) compteur += 1;;

    //si une voyelle, ajouter au nombre de voyelles
    //  if (reponse[i] == "a" || reponse[i] == "e" || reponse[i] == "i" || reponse[i] == "o" || reponse[i] == "u" || reponse[i] == "y") {
    //    compteur += 1;
      }
      window.alert("voici le nombre de voyelles: "+ compteur);
    //return compteur;

}

//JS 06 Opérateurs 
function promptmes() { 
    let a = 100; 
    window.alert("Ceci est une chaine de caractères:" + a );
}


