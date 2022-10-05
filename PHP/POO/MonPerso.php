<?php
class Personnage
{
    private $nom;
    private $prenom;
    

    public function __construct($nom, $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        
    }

    public function setnom(string $nom){$this->nom = $nom;}
    public function setprenom(string $nom){$this->nom = $nom;}
    
}


//$p = new Personnage();
//$p->setnom("Lebowski");
//$p->setprenom("Jeff");

//echo ($p);
$p1 = new Personnage('Lebowski', 'Jeff');


echo "<pre>";
print_r($p1);
echo "</pre>";