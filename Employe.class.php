<?php

  abstract class Employe 
  {
    private $prenom;
    private $nom;
    private $age;

    public function __construct(string $p, string $n, int $a) 
    {
      
      $this->prenom = $p;
      $this->nom = $n;
      $this->age = $a;
    }

    abstract public function calculerSalaire();

    public function __toString() 
    {

      return "le vendeur " .$this->prenom ." " .$this->nom ." gagne ";
    }
  }

?>