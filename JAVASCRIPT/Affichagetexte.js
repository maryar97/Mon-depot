
var a;
var b;
var c;

a=prompt("Entrez votre nom")
b=prompt("Entrez votre prénom")



if (window.confirm("Etes-vous un homme ?") == true)
{
    alert("Bonjour Monsieur" +" " +a+" "+b+" "+"Bienvenue sur notre site web")
}
else 
{
    alert("Bonjour Madame"+" "+a+" "+b+"Bienvenue sur notre site web")
}

