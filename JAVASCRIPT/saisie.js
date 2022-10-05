
var a = Number
a = 1
var b
var c=""

do 
{
    var n = (prompt("Choisir le prénom n°"+a));
    if(a==1)
        {c=n} 
    else 
        {c=c+" "+n};
    a++; 

} while(n!="")
b = a-2
console.log(b)
console.log(c)