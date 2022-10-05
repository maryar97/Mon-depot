<?php
class Animal 
{
    public $espece;
    private $taille;
    private $poids;
    private $nbpattes;

    public function manger() {
        // ...
    }

    public function avancer(int $nbpas) {
        // ...
    }

    public function setPattesNb($nbPattes){
        $nbpattes = $nbPattes;
    } 
}

class Chat extends Animal {

}
$canard = new Animal();
$canard->setPattesNb(2);
$chat = new Animal();
$chat->setPattesNb(4);

