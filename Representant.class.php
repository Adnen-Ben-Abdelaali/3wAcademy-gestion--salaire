<?php

  class Representant extends Commercial
  {
    private $salaireCommercial = 0;
    const POURCENTAGE_CHIFFRE_AFFAIRES = 0.3;
    const SALAIRE_DE_BASE = 700;

    public function calculerSalaire() 
    {

      $this->salaireCommercial += self::POURCENTAGE_CHIFFRE_AFFAIRES * $this->CA + self::SALAIRE_DE_BASE;
    }
    
    public function __toString() 
    {
      
      return parent::__toString().$this->salaireCommercial;
    }
  }

?>