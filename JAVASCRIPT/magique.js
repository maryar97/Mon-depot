
var a = Math.floor(Math.random() * 10000000)+1;
console.log(a)

   document.querySelector('#button1').onclick= function()
    {
  var b= document.getElementById('textBox1').value;
   
  var c= document.getElementById("label1")
  var i;
        
        if (b<a)
        {
            c.textContent="Trop petit"; 
        }
        else if (b>a)
        {
            c.textContent="Trop grand";
        }
        else if (b=a)
        {
            c.textContent="Correct"
        }
    }