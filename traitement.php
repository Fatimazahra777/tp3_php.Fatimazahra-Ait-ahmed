<?php
include 'includes/entete_inc.php';
include 'includes/menu_inc.php';

define('NOTE_MIN', 0);
define('NOTE_MAX', 20);

if (
    isset($_POST['nom'], $_POST['note_info'], $_POST['note_math']) &&
    !empty($_POST['nom']) &&
    $_POST['note_info'] !== '' &&
    $_POST['note_math'] !== ''
) {
    $nom = htmlspecialchars($_POST['nom']);
    $note_info = floatval($_POST['note_info']);
    $note_math = floatval($_POST['note_math']);

    if (
        $note_info >= NOTE_MIN && $note_info <= NOTE_MAX &&
        $note_math >= NOTE_MIN && $note_math <= NOTE_MAX
    ) {
        $moyenne = ($note_info + $note_math) / 2;

        echo "<h3>Récapitulatif des notes</h3>";
        echo "<p><b>Nom :</b> " . $nom . "</p>";
        echo "<p><b>Note Informatique :</b> " . $note_info . " / 20</p>";
        echo "<p><b>Note Mathématiques :</b> " . $note_math . " / 20</p>";
        echo "<p><b>Moyenne générale :</b> " . number_format($moyenne, 2) . " / 20</p>";

    } else {
        echo "<p style='color:red;'><b>Erreur :</b> Les notes doivent être comprises entre " . NOTE_MIN . " et " . NOTE_MAX . ".</p>";
    }

} else {
    echo "<p style='color:red;'><b>Erreur :</b> Veuillez remplir tous les champs du formulaire.</p>";
}

include 'includes/pied_inc.php';
/*
Réponses (Exercice 4.3)

  Question a : Pourquoi préférer POST à GET pour un mot de passe ?
  Réponse : On préfère POST car la méthode GET transmet les données 
  via l'URL (visibles dans la barre d'adresse et l'historique du navigateur), 
  ce qui présente un risque majeur de sécurité. En revanche, la méthode POST 
  transmet les données de manière invisible dans le corps de la requête HTTP (Request Body).

  Question b : Que contient $_REQUEST ?
  Réponse : La variable superglobale $_REQUEST est un tableau associatif 
  qui contient par défaut l'ensemble des données des tableaux $_GET, $_POST et $_COOKIE combinés.
*/
?>
