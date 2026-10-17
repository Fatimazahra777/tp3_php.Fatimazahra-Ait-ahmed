<?php
include 'includes/entete_inc.php';
include 'includes/menu_inc.php';

$chemin_fichier = "data/notes.csv";

// 1. testez l'existence du fichier avec file_exists()
if (file_exists($chemin_fichier)) {

    // 2. ouvrez-le en lecture et gérez l'échec d'ouverture (message d'erreur puis exit)
    $fichier = fopen($chemin_fichier, "r");

    if ($fichier === false) {
        echo "<p style='color:red;'>Erreur : Impossible d'ouvrir le fichier des notes.</p>";
        exit; // Arrêt du script en cas d'échec
    }

    $somme_moyennes = 0;
    $nombre_etudiants = 0;
?>
    
    <h2>Liste des étudiants et leurs notes</h2>
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; text-align: center;">
        <thead>
            <tr style="background-color: #8ba9c2;">
                <th>Nom</th>
                <th>Info</th>
                <th>Math</th>
                <th>Moyenne</th>
                <th>Mention</th>
            </tr>
        </thead>
        <tbody>
        <?php

        // 3. lisez-le ligne par ligne avec fgetcsv() dans une boucle while
        while (($ligne = fgetcsv($fichier, 1000, ";")) !== FALSE) {
    
          if (count($ligne) >= 3) {
            $nom = htmlspecialchars($ligne[0]);
            $note_info = floatval($ligne[1]);
            $note_math = floatval($ligne[2]);

            $moyenne_etudiant = ($note_info + $note_math) / 2;

            if ($moyenne_etudiant >= 16) {
                $mention = "Très Bien";
            } elseif ($moyenne_etudiant >= 14) {
                $mention = "Bien";
            } elseif ($moyenne_etudiant >= 12) {
                $mention = "Assez Bien";
            } elseif ($moyenne_etudiant >= 10) {
                $mention = "Passable";
            } else {
                $mention = "Insuffisant";
            }

            $somme_moyennes += $moyenne_etudiant;
            $nombre_etudiants++;

            echo "<tr style='background-color: #c3c98e;'>";
            echo "<td>" . $nom . "</td>";
            echo "<td>" . $note_info . "</td>";
            echo "<td>" . $note_math . "</td>";
            echo "<td>" . number_format($moyenne_etudiant, 2) . "</td>";
            echo "<td>" . $mention . "</td>";
            echo "</tr>";
          }
        }

        fclose($fichier);
        ?>
        </tbody>
    </table>

<?php
    if ($nombre_etudiants > 0) {
        $moyenne_generale_classe = $somme_moyennes / $nombre_etudiants;
        echo "<h3 style='margin-top: 20px;'>Moyenne générale de la classe : " . number_format($moyenne_generale_classe, 2) . " / 20</h3>";
    }

} else {
    echo "<p style='color:red;'>Erreur : Le fichier data/notes.csv n'existe pas.</p>";
}

include 'includes/pied_inc.php';
?>