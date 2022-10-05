
     function lis()
     {
     var reg= new RegExp(/^[A-Za-z]+$/)
     var num= new RegExp(/^[0-9]{5}$/)
     var emai= new RegExp(/^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/)
     var phon = new RegExp(/^0[1-9]{9}$/)
     var s = document.forms["Formu"]["Société"];
     var c = document.forms["Formu"]["Contact"];
     var p = document.forms["Formu"]["Postal"];
     var v = document.forms["Formu"]["Ville"];
     var e = document.forms["Formu"]["Email"];
     var t = document.forms["Formu"]["Tel"]
     

     if (s.value == "") {
       alert("Entrez le nom de votre société.");
       s.focus();
       return false;
     }
     if (reg.test(s.value)== false) {
       alert("Entrez le nom de société valide.");
       s.focus();
       return false;
     }
     if (c.value == "") {
       alert("Entrez le nom de la personne a contacter.");
       c.focus();
       return false;
     }  
     if (reg.test(c.value)== false) {
       alert("Entrez nom valide.");
       c.focus();
       return false;
     }
     if (p.value == "") {
       alert("Entrez le code postal.");
       p.focus();
       return false;
     }
     if (num.test(p.value)== false) {
       alert("Entrez un code postal valide.");
       p.focus();
       return false;
     }  
     if (v.value == "") {
       alert("Entrez la ville");
       v.focus();
       return false;
     }
     if (reg.test(v.value)== false) {
       alert("Entrez nom de ville valide.");
       v.focus();
       return false;
     }
     if (e.value == "") {
       alert("Entrez une adresse mail");
       e.focus();
       return false;
     }  
     if (emai.test(e.value)== false) {
       alert("Entrez une adresse mail valide.");
       e.focus();
       return false;
     }
     if (phon.test(t.value)== false) {
       alert("Entrez un numéro de téléphone valide");
       t.focus();
       return false
     }
   return true;
     }

