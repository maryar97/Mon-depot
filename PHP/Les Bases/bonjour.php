<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <?php 
                
                echo "Bonjour le monde,\ncomment allez-vous ?"; 
                $myVar = "KO";

if ($myVar != "OK") 
{
    error_log("Ouh là pas bien");
    // Message enregistré dans le fichier 'C:/<repertoire_logs>/php_error.log' 
}
            ?> 
        </body>
    </html>