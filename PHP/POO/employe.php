<?php

class Magasins
{
        private $name;
        private $adresse;
        private $codepostal;
        private $ville;

        public function __construct($name, $adresse, $codepostal, $ville)
        {
                $this->name = $name;
                $this->adresse = $adresse;
                $this->codepostal = $codepostal;
                $this->ville = $ville;
        }  
      
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        public function setAdresse($adresse)
        {
                $this->adresse = $adresse;

                return $this;
        }  
             
        public function setCodepostal($codepostal)
        {
                $this->codepostal = $codepostal;

                return $this;
        }       

        public function setVille($ville)
        {
                $this->ville = $ville;

                return $this;
        } 
        
        public function getName()
        {
                return $this->name;
        }
        
        public function getVille()
        {
                return $this->ville;
        }
}

    class Employe extends Magasins
    {
        private $nom;
        private $prenom;
        private $embauche;
        private $fonction;
        private $salaire;
        private $service;
        

        public function __construct($nom, $prenom, $embauche, $fonction, $salaire, $service)
        {
                //$date= new DateTime("now");
                $this->nom = $nom;
                $this->prenom = $prenom;
                $this->embauche = new DateTime($embauche);
                //$this->difference = $date->diff(new DateTime($embauche));
                $this->fonction = $fonction;
                $this->salaire = $salaire;
                $this->service = $service;
               

// //var_dump($date->format("d/m/Y"));
 //echo($this->difference->format("%y")."ans");


        }
        public function getPrenom()
        {
                return $this->prenom;
        }
        
        public function getNom()
        {
                return $this->nom;

        }

        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        public function setEmbauche($embauche)
        {      
                $this->embauche = $embauche;

                return $this;
        }
        
       
   
        public function setFonction($fonction)
        {
                $this->fonction = $fonction;

                return $this;
        }
    
        public function setSalaire($salaire)
        {
                $this->salaire = $salaire;

                return $this;
        }

        public function setService($service)
        {
                $this->service = $service;

                return $this;
        }

         
        public function getEmbauche()
        {
                return $this->embauche;
        }

    /*    public function dateemb()
{
        $aujour= date_create("y");
    
       $diff= date_diff($aujour, $embauche);

       return $diff->format("%y");
       
}*/
      public function anciennete() {

        $date= new DateTime("now");
        $diff= $this->embauche;
        $tat= $this->tat = $date->diff($diff);
        $fin=$this->tat->format("%y");
        return $fin;
      }

      public function prime()
{
        $sal = $this->salaire;
        $anc = $this->anciennete();
        
                $pa= $sal * 5;
                $paf= $pa / 100;
                $pou = $anc * 2; 
                $ann = $pou * $sal;
                $re = $ann / 100;
                $resu =  $re ;
             
     
       return $resu;
}

       public function verifdate()
{

       /* $d1 = '25-01-2019';
        $d2 = '30-June 2018';
        $tmstp1 = strtotime($d1);
        $tmstp2 = strtotime($d2);

        $dfr1 = strftime('%d %B %Y', $tmstp1);
        $dfr2 = strftime('%d %B %Y', $tmstp2);*/
        $tmstp1 = new dateTime("now");
        $tmstp2 = new datetime("30-11-2022");

        if($tmstp1 < $tmstp2){
                echo 'La date pour la prime est pas bonne <br>';
        }elseif($tmstp1 == $tmstp2){
                echo 'Les primes sont donné <br>';
        }else{
                echo 'La date est vraiment pu bonne <br>';
}

}        
    }


?>