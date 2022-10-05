var a = Number(prompt("Choisir un nombre"));

var b = Number(prompt("Choisir un nombre"));

var c = prompt("Choisir un opérateur");

var d;

switch (c) 
{
    case "+":
        document.write(a + b);
        break;

    case "-":
        document.write(a - b);
        break;

    case "/":
        document.write(a / b);
        break;

    case "*":
        document.write(a * b);
        break;

    default:
        document.write("Mauvais opérateur")
}






