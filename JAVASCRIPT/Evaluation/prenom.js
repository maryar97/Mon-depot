
var nom = ["Audrey","Aurelien", "Flavien", "Jeremy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stephane"];

var r = prompt("Entrez un prénom a chercher")

if(nom.includes(r)){
    nom.splice(nom.indexOf(r),1)
    nom.push(" ")
    document.write(nom)
}

else{
    alert("Il y a pas de prénom correspondant")
}