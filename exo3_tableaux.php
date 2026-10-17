<?php

// Partie 3 : Tableaux
// Fichier : exo3_tableaux.php

require_once 'config.php';

// Fonction mention de l'exercice précédent pour l'affichage HTML
function mention($note) {
    if ($note >= 16) return "Très bien";
    if ($note >= 14) return "Bien";
    if ($note >= 12) return "Assez bien";
    if ($note >= SEUIL) return "Passable";
    return "Ajourné";
}


// Exercice 3.1 : Création

$notes = [
    "Mohamed" => 16,
    "Ahmed"   => 14,
    "Hind"    => 13,
    "Aicha"   => 15,
    "Samir"   => 13,
    "Zakaria" => 13,
    "Rafik"   => 10,
    "Ilham"   => 9,
    "Hamza"   => 7,
    "Sami"    => 7,
    "Noura"   => 14
];

$modules = ["PHP", "HTML/CSS", "JavaScript"];

echo "<h3>Exercice 3.1 : Affichage de \$modules</h3>";

// Affichage avec foreach
echo "<strong>Avec foreach :</strong><br>";
foreach ($modules as $module) {
    echo $module . " ";
}
echo "<br>";

// Affichage par indice
echo "<strong>Par indice :</strong><br>";
for ($i = 0; $i < count($modules);$i++) {
    echo $modules[$i] . " ";
}
echo "<br><hr>";


// Exercice 3.2 : Affichage HTML

echo "<h3>Exercice 3.2 : Tableau HTML des notes</h3>";

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";

foreach ($notes as $nom => $note) {
    // Si la note est inférieure à SEUIL, la ligne s'affiche en rouge
    $style = ($note < SEUIL) ? "style='color: red;'" : "";
    /*
    2éme méthote de dernier ligne:
    $style = "";
    if ($note < SEUIL) {
        $style = "style='color: red;'";
    }
    */
    echo "<tr $style>";
    echo "<td>$nom</td>";
    echo "<td>$note</td>";
    echo "<td>" . mention($note) . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "<hr>";


// Exercice 3.3 : Statistiques

echo "<h3>Exercice 3.3 : Statistiques</h3>";

// 1. Calcul avec une boucle
$somme = 0;
$nb_elements = 0;
$max_note = null;
$min_note = null;

foreach ($notes as $note) {
    $somme += $note;
    $nb_elements++;
    
    if ($max_note === null || $note > $max_note) {$max_note = $note;
    }
    if ($min_note === null || $note < $min_note) {$min_note = $note;
    }
}

$moyenne = $somme / $nb_elements;

echo "Somme (boucle) : $somme<br>";
echo "Moyenne (boucle) : " . round($moyenne, 2) . "<br>";
echo "Meilleure note (boucle) : $max_note<br>";
echo "Plus faible note (boucle) : $min_note<br><br>";

// 2. Vérification avec les fonctions natives
echo "<b>Vérification avec fonctions natives :</b><br>";
echo "array_sum : " . array_sum($notes) . "<br>";
echo "count : " . count($notes) . "<br>";
echo "max : " . max($notes) . "<br>";
echo "min : " . min($notes) . "<br><br>";

// 3. Tableau associatif $effectifs donnant le nombre d'apprenants par mention
$effectifs = [
    "Très bien"  => 0,
    "Bien"       => 0,
    "Assez bien" => 0,
    "Passable"   => 0,
    "Ajourné"    => 0
];

foreach ($notes as $note) {
    $m = mention($note);
    $effectifs[$m]++;
}

echo "<b>Effectifs par mention :</b><br>";
foreach ($effectifs as $m =>$eff) {
    echo "$m :$eff<br>";
}
echo "<hr>";


// Exercice 3.4 : Tri

echo "<h3>Exercice 3.4 : Tri du tableau</h3>";

function afficher($tab) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";
    foreach ($tab as $nom => $note) {
        echo "<tr>";
        echo "<td>" . $nom . "</td>";
        echo "<td>$note</td>";
        echo "<td>" . mention($note) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br><br>";
}

// 1. Tri par noms croissants (ksort)
$t1 = $notes;
ksort($t1);
echo "<b>1. Noms croissants (ksort) :</b><br>";
afficher($t1);

// 2. Tri par notes décroissantes (arsort)
$t2 = $notes;
arsort($t2);
echo "<b>2. Notes décroissantes (arsort) :</b><br>";
afficher($t2);

// 3. Tri par noms décroissants (krsort)
$t3 = $notes;
krsort($t3);
echo "<b>3. Noms décroissants (krsort) :</b><br>";
afficher($t3);

// 4. Tri par notes croissantes (asort)
$t4 = $notes;
asort($t4);
echo "<b>4. Notes croissantes (asort) :</b><br>";
afficher($t4);

/*
  Question 3.4 : Quelle fonction de tri utiliser sur un tableau indexé comme $modules ?
  Réponse : On utilise 'sort()' pour trier par ordre croissant ou 'rsort()' pour trier par ordre décroissant (en réindexant les clés numériques).
*/

echo "<hr>";


// Exercice 3.5 : Opérateurs de tableaux

echo "<h3>Exercice 3.5 : Opérateurs de tableaux</h3>";

$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

echo "\$a + \$b : <pre>"; print_r($a + $b); echo "</pre>";
echo "var_dump(\$a == \$b) : "; var_dump($a == $b); echo "<br>";
echo "var_dump(\$a === \$b) : "; var_dump($a === $b); echo "<br>";

/*
  Explication des différences (Exercice 3.5) :
  - $a + $b : Union des tableaux. Si les clés existent déjà dans $a, celles de $b sont ignorées.
  - $a == $b : Égalité. True si les tableaux ont les mêmes paires clé/valeur, peu importe l'ordre.
  - $a === $b : Identité. False ici car l'ordre des éléments diffère entre $a et $b.
*/

?>