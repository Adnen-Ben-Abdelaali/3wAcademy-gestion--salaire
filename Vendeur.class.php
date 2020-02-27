<?php

  class Vendeur extends Commercial
  {
    
    private $salaireVendeur = 0;
    const POURCENTAGE_CHIFFRE_AFFAIRES = 0.2;
    const SALAIRE_DE_BASE = 300;
    
    public function calculerSalaire() 
    {

      $this->salaireVendeur += self::POURCENTAGE_CHIFFRE_AFFAIRES * $this->CA + self::SALAIRE_DE_BASE;
    }
    
    public function __toString() 
    {
      
      return parent::__toString().$this->salaireVendeur;
    }
  }


?>