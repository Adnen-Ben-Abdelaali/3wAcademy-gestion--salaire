<?php

  function loadClass($class) 
  {
    require_once "./".$class.'.class.php';
  }

  spl_autoload_register('loadClass');
/*

  require_once "Employe.class.php";
  require_once "Commercial.class.php";
  require_once "Technicien.class.php";
  require_once "Representant.class.php";
  require_once "Vendeur.class.php";
  require_once "Entreprise.class.php";

  */

  $v = new Vendeur("Ahmed", "HARBEOUI", 30, 50000);
  $v->calculerSalaire();
  $t = new Technicien("Amir", "MHENNI ", 50, 100);
  $t->calculerSalaire();
  $r = new Representant("Mohamed", "BELIL", 45, 50000);
  $r->calculerSalaire();
  $entreprise = new Entreprise();
  $entreprise->ajouterEmploye($v);
  $entreprise->ajouterEmploye($t);
  $entreprise->ajouterEmploye($r);
  $entreprise->affiche();