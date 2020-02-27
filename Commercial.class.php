<?php

  abstract class Commercial extends Employe
  {
    protected $CA;

    public function __construct($p, $n, $a, $ca) 
    {
      parent::__construct($p, $n, $a);
      $this->CA = $ca;
    }
  }

?>