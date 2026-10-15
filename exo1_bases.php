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
echo "\$A = " . $A . "<br><br>";
?>

<?php
//Exercice 1.2 :Constantes
require 'config.php';

echo "Établissement : " . ETABLISSEMENT . "<br>";
echo "Note Minimale : " . NOTE_MIN . "<br>";
echo "Note Maximale : " . NOTE_MAX . "<br>";
echo "Seuil : " . SEUIL . "<br><br>";

// Test de la fonction defined()
echo "INCONNUE est définie ? ";
var_dump(defined('INCONNUE'));
echo "<br>";

echo "SEUIL est définie ? ";
var_dump(defined('SEUIL'));
echo "<br><br>";

/*
  Réponses aux questions :

  1. Que se passe-t-il si vous affichez une constante non définie ?
     Réponse : PHP génère une erreur (Undefined constant) et ne peut pas afficher sa valeur.

  2. Quelle différence y a-t-il entre const et define() ?
     Réponse : 
     - const est exécuté au moment de la compilation (Compile-time). Elle ne peut pas être utilisée à l'intérieur des structures conditionnelles (comme if).
     - define() est exécuté au moment de l'exécution (Run-time). Elle peut être utilisée n'importe où dans le code (par exemple à l'intérieur d'un if).
*/
?>


