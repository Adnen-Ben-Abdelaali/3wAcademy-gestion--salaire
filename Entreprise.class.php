<?php

  class Entreprise 
  {
    private $listeEmployes = array();

    public function ajouterEmploye(Employe $employe) 
    {

     array_push($this->listeEmployes, $employe);
    }

    public function salaireMoyen() 
    { 
      if(count($listeEmployes) != 0) {

        $salaireMoyen = 0;
      foreach($this->listeEmployes as $key => $value) 
      {
        $salaireMoyen += $value;
      }

      return round($salaireMoyen/count($listeEmployes), 2);
     }

    }  

    public function affiche() 
    {
      
      foreach($this->listeEmployes as $key => $value) 
      {
        echo $value ."\n";
      }

    }

  }

  
?>