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
           $hash= "TopSecret42";
            function complex_password($mdp)
{
	            $majuscule = preg_match('@[A-Z]@', $mdp);
	            $minuscule = preg_match('@[a-z]@', $mdp);
	            $chiffre = preg_match('@[0-9]@', $mdp);
	
	            if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp) < 8){
		            return false;
	}
	            else 
		            return true;

}
               
                if (complex_password('Marylinekonan97', $hash)) {
                    echo 'true';
}               else {
                    echo 'false';
}
?>