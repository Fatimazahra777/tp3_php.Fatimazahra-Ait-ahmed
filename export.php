<?php
// Question 1 : Construisez un tableau associatif des résultats (nom, notes, moyenne)
$chemin_fichier = "data/notes.csv";
$tableau_resultats = [];

if (file_exists($chemin_fichier)) {
    $fichier = fopen($chemin_fichier, "r");
    
    if ($fichier !== false) {
        while (($ligne = fgetcsv($fichier, 1000, ";")) !== FALSE) {
            if (count($ligne) >= 3) {
                $nom = htmlspecialchars($ligne[0]);
                $note_info = floatval($ligne[1]);
                $note_math = floatval($ligne[2]);
                $moyenne = ($note_info + $note_math) / 2;

                $tableau_resultats[] = [
                    "nom" => $nom,
                    "info" => $note_info,
                    "math" => $note_math,
                    "moyenne" => $moyenne
                ];
            }
        }
        fclose($fichier);
    }
}

// Question 2 : Écrivez-le dans 'data/notes.json' avec json_encode() et file_put_contents()
$chemin_json = "data/notes.json";
$json_data = json_encode($tableau_resultats, JSON_PRETTY_PRINT);
file_put_contents($chemin_json, $json_data);

// Question 3 : Relisez-le avec file_get_contents() puis json_decode($json, true) et affichez-le avec print_r()
echo "<h2>3. Lecture et affichage avec print_r() :</h2>";
if (file_exists($chemin_json)) {
    $contenu_json = file_get_contents($chemin_json);
    $tableau_decode = json_decode($contenu_json, true);
    
    echo "<pre>";
    print_r($tableau_decode);
    echo "</pre>";
}

// Question 4 : Comparez le résultat de serialize() et celui de json_encode() sur le même tableau
$donnees_serialize = serialize($tableau_resultats);
$donnees_json = json_encode($tableau_resultats);

echo "<hr>";
echo "<h2>4. Comparaison entre serialize() et json_encode() :</h2>";
echo "<p><strong>Format serialize() :</strong> " . htmlspecialchars($donnees_serialize) . "</p>";
echo "<p><strong>Format json_encode() :</strong> " . htmlspecialchars($donnees_json) . "</p>";


/*
Question : Lequel de ces formats est directement exploitable par une application JavaScript ?
Réponse : Le format JSON (json_encode) est directement exploitable par une application JavaScript
car il s'agit d'un format standard nativement pris en charge par JavaScript (via JSON.parse()).
En revanche, le format serialize() est propre à PHP et ne peut pas être interprété directement par JavaScript.
*/

?>