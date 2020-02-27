<?php

  class Technicien extends Employe 
  { 
    const COEFFICIENT_DE_GAIN = 5;
    private $nbUnites = 0; 
    private $salaireTechnicien = 0;

    public function __construct($p, $n, $a, $nbU) 
    {
      
      parent::__construct($p, $n, $a);
      $this->nbUnites = $nbU;
    }

    public function calculerSalaire()
    {

      $this->salaireTechnicien = $this->nbUnites * self::COEFFICIENT_DE_GAIN;
    }

    public function __toString() 
    {
      
      return parent::__toString() .$this->salaireTechnicien;
    }
  }


?> 