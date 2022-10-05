
var a = prompt("Donnez un age")
var b=0
var c=0

var d=0

do {
     if (a<20) {
        a = prompt("Donnez un age")
        b++
    }
    else if(20<=a & a<=40) {
        a = prompt("Donnez un age") 
        c ++
    }
    else if(a>40) {
        a = prompt("Donnez un age") 
         d++
    }
}

while (a<100)
if (a=>100) { 
    d++ 
}

document.write("Il y a " + b + " personnes de moins de 20 ans il y a aussi " + c + " personnes agés de 20 a 40 ans et " + d + " personne agés de plus de 40 ans.")
 