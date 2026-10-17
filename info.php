<?php
include 'includes/entete_inc.php';
include 'includes/menu_inc.php';

if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['sexe'])) {
    
    $nom = htmlspecialchars($_GET['nom']);
    $prenom = htmlspecialchars($_GET['prenom']);
    $sexe = $_GET['sexe'];

    echo "<h3>Résultat :</h3>";
    
    if ($sexe === 'M') {
        echo "<p>Bonjour Monsieur <b>$prenom $nom</b></p>";
    } else {
        echo "<p>Bonjour Madame <b>$prenom $nom</b></p>";
    }

} else {
    echo "<p>Veuillez remplir tous les champs du formulaire.</p>";
}

include 'includes/pied_inc.php';
?>