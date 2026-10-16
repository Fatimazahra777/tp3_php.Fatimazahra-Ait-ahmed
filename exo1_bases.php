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


echo "<h3>Exercice 1.1 : Noms de variables</h3>";
echo "\$a = " . $a . "<br>";
echo "\$A = " . $A . "<br><br>";
?>

<?php
//Exercice 1.2 :Constantes
require 'config.php';


echo "<h3>Exercice 1.2 : Constantes</h3>";
echo "Établissement : <strong> " . ETABLISSEMENT . "</strong><br>";
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

<?php
//Exercice 1.3 : Calcul (Prix TTC)

$prix_ht = 60;
$tva = 20; // 20%

$prix_ttc = $prix_ht * (1 + $tva / 100);

echo "<h3>Exercice 1.3 : Calcul du Prix TTC</h3>";
echo "Prix HT : " . $prix_ht . " DH<br>";
echo "Taux de TVA : " . $tva . " %<br>";
echo "<strong>Prix TTC : " . $prix_ttc . " DH</strong><br>";
?>

<?php

//Exercice 1.4 : Types et conversions

echo "<h3>Exercice 1.4 : Types et conversions</h3>";

// Question 1 : Cast en string
$test = 42;
$test = (string) $test; 

echo "<b>1. Cast en string :</b><br>";
var_dump($test); 
echo "<br><br>";


// Question 2 : Cast en booléen (bool)
echo "<b>2. Cast en booléen :</b><br>";

var_dump((bool) "0");    // bool(false) 
echo "<br>";
var_dump((bool) 0.0);    // bool(false)
echo "<br>";
var_dump((bool) "0");    // bool(false)
echo "<br>";
var_dump((bool) "");     // bool(false) 
echo "<br>";
var_dump((bool) "abc");  // bool(true)  
echo "<br>";
var_dump((bool) []);     // bool(false) 
echo "<br>";
var_dump((bool) null);   // bool(false)
echo "<br><br>";

// Question 3 : Cast divers (int, float)
echo "<b>3. Cast divers :</b><br>";
var_dump((int) 3.9);       // int(3) 
echo "<br>";
var_dump((int) "12abc");   // int(12)
echo "<br>";
var_dump((float) "1.5e3"); // float(1500) 
echo "<br>";
var_dump((int) true);      // int(1) 
echo "<br><br>";


// Question 4 : Notations numériques (Décimal, Hexadécimal, Octal, Binaire)
echo "<b>4. Notations numériques (Nombre 255) :</b><br>";

$dec = 255;          // décimal
$hex = 0xFF;         // hexadécimal 
$oct = 0377;         // octal 
$bin = 0b11111111;   // binaire

echo "Décimal : " . $dec . "<br>";
echo "Hexadécimal : " . $hex . "<br>";
echo "Octal : " . $oct . "<br>";
echo "Binaire : " . $bin . "<br>";
?>

<?php

// Exercice 1.5 : Chaînes de caractères

// Déclaration des variables requises
$traitees = "égales à";
$ici = 2;

echo "<h3>Exercice 1.5 : Chaînes de caractères</h3>";

// 1. Ahmed a dit : "J'ai réussi"
echo "1. Ahmed a dit : \"J'ai réussi\"<br>";

// 2. Voulez-vous supprimer C:\.?
echo "2. Voulez-vous supprimer C:\\.?<br>";

// 3. Ceci n'affichera pas \n de nouvelle ligne
echo '3. Ceci n\'affichera pas \n de nouvelle ligne<br>';

// 4. Les variables ne seront pas $traitees $ici (non interprétées)
echo '4. Les variables ne seront pas $traitees $ici<br>';

// 5. Les variables seront égales à 2 (interprétées)
echo "5. Les variables seront $traitees $ici<br><br>";


// Suite : Partie manipulation des chaînes

// A. Suppression des astérisques avec trim()
$chaine = "*Bonjour les développeurs*";
$chaine_nettoyee = trim($chaine, "*");

echo "<b>A. Utilisation de trim() :</b><br>";
echo "Avant : " . $chaine . "<br>";
echo "Après : " . $chaine_nettoyee . "<br><br>";

// B. Affichage lettre par lettre avec strlen() et une boucle for
echo "<b>B. Affichage lettre par lettre :</b><br>";
$texte = "PHP"; 
for ($i = 0; $i < strlen($texte); $i++) {
    echo $texte[$i] . "<br>";
}

?>