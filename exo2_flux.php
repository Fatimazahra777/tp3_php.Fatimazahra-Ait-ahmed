<?php

// Partie 2 : Structures de contrôle et boucles
// Fichier : exo2_flux.php

// Inclusion du fichier de configuration
require_once 'config.php';

// Exercice 2.1 : if / elseif / else

// Fonction qui retourne la mention en fonction de la note
function mention($note) {
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}

echo "<h3>Exercice 2.1 : Test de la fonction mention()</h3>";

// Test de la fonction avec plusieurs notes
$notes_a_tester = [18, 15, 13, 11, 8];

foreach ($notes_a_tester as $note) {
    echo "Note : " . $note . " => Mention : " . mention($note) . "<br>";
}

echo "<hr>"; //pour tracer une ligne horizontal
?>

<?php
// Exercice 2.2 : switch
echo "<h3>Exercice 2.2 : Affichage du mois courant avec switch</h3>";
// 1. Récupération du mois courant au format numérique (01 à 12)
$mois_courant = date("m");

// 2. Affichage du nom du mois en français
switch ($mois_courant) {
    case "01":
        echo "Mois courant : Janvier<br>";
        break;
    case "02":
        echo "Mois courant : Février<br>";
        break;
    case "03":
        echo "Mois courant : Mars<br>";
        break;
    case "04":
        echo "Mois courant : Avril<br>";
        break;
    case "05":
        echo "Mois courant : Mai<br>";
        break;
    case "06":
        echo "Mois courant : Juin<br>";
        break;
    case "07":
        echo "Mois courant : Juillet<br>";
        break;
    case "08":
        echo "Mois courant : Août<br>";
        break;
    case "09":
        echo "Mois courant : Septembre<br>";
        break;
    case "10":
        echo "Mois courant : Octobre<br>";
        break;
    case "11":
        echo "Mois courant : Novembre<br>";
        break;
    case "12":
        echo "Mois courant : Décembre<br>";
        break;
    default:
        echo "Mois invalide<br>";
        break;
}

/*
  3. Réponse à la question:
  Si on oublie un instruction 'break' dans un 'case', PHP continue d'exécuter les instructions des cases suivants sans vérifier leurs conditions. 
  C'est ce qu'on appelle le phénomène de "fall-through".
*/

echo "<hr>"; 
?>


<?php
// Exercice 2.3 : Boucles
echo "<h3>Exercice 2.3 : Boucles</h3>";
// 1. Triangle avec deux boucles for imbriquées
echo "<h3>1. Triangle d'étoiles</h3>";
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";

// 2. Nombres de 0 à 20 par pas de 2 avec while (10 en gras)
echo "<h3>2. Nombres de 0 à 20 (step 2)</h3>";
$i = 0;
while ($i <= 20) {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }
    $i += 2;
}

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";

// 3. Nombres pairs de 0 à 10 avec for et continue
echo "<h3>3. Nombres pairs avec for et continue</h3>";
for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;
    }
    echo "$i<br>";
}

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";

// 4. Utilisation de while, switch et break 2
echo "<h3>4. While, switch et break 2</h3>";
$i = 0;
while (true) {
    $i++;
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break 1; // Sort uniquement du switch
        case 10:
            echo "At 10; quitting<br>";
            break 2; // Sort du switch ET de la boucle while
    }
}

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";

// 5. Réécriture de la question 2 avec do-while
echo "<h3>5. Question 2 avec do-while</h3>";
$j = 0;
do {
    if ($j == 10) {
        echo "<strong>$j</strong><br>";
    } else {
        echo "$j<br>";
    }
    $j += 2;
} while ($j <= 20);

/*
  Différence entre while et do-while :
  - while : vérifie la condition AVANT d'exécuter le bloc de code (le code peut ne jamais s'exécuter si la condition est fausse dès le départ).
  - do-while : exécute le bloc de code AU MOINS UNE FOIS, puis vérifie la condition à la fin.
*/

?>