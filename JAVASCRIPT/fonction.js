
     var x=prompt("Entrez un nombre")
     var y=prompt("Entrez un multiplicateur")
     var w;
     var v; 

   function afficheImg(image)
 {
   var img= document.createElement('img')
   img.src= 'papillon.jpg'
   document.body.appendChild(img)
 }  
   afficheImg()
   
   function produit()
 { 
     w=x*x*x   
     document.write("Le cube de "+x+" est égal a "+w)
     document.write()
     v=x*y
     document.write("Le produit de "+x+" x "+y+" est égal a "+v)
 }

   produit() 
