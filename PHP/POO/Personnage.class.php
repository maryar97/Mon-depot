<?php
class Personnage
{
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    public function __construct($nom, $prenom, $age, $sexe){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->sexe = $sexe;
    }

    public function getnom(): string {return $this->nom;}
    public function getprenom(): string {return $this->prenom;}

    public function getage(): int {return $this->age;}
    public function getsexe() {return $this->sexe;}
}



$p1 = new Personnage('Konan', 'Arlette', 20, 'f');
$p2 = new Personnage('Fernandez', ';Mickael', 25, 'm');

echo "<pre>";
print_r($p1);
print_r($p2);
echo "</pre>";


echo $p2->getnom();


