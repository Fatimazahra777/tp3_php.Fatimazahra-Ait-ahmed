<?php echo 'Hello PHP <br><br>'; ?>


<?php
/*
  Exercice 1.1 : Noms de variables
  $x      -> Valide 
  $_x     -> Valide
  $2x     -> Invalide 
  $x-y    -> Invalide 
  $Prix_HT-> Valide 
  $prix ht-> Invalide 
  les variable qui sont identique if faut débuton par un littre ou un "_" , tant que les espace et accent et un nombre en debut de $.
*/

//Déclaration des variable qui sont valide
$x = 10;
$_x = 20;
$Prix_HT = 100;

//Justification de $a` et `$A` sont deux variables distinctes
$a = "petit a";
$A = "GRAND A";

echo "\$a = " . $a . "<br>";
echo "\$A = " . $A . "<br>";
?>




