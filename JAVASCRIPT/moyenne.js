
a = 0; 
s = 0.0; 
n = 1

while(n != 0)
{
    n = parseFloat(prompt("Nombre (0 pour finir) : ")); 
    a = a + 1; 
    s += n;
}

if (a == 1) 
{ 
   document.write("Veuillez saisir un nombre"); 
} 
else 
{ 
    console.log(s);
   m = s / (a-1); 
   document.write("Moyenne : "+m); 
   console.log(m)
}



