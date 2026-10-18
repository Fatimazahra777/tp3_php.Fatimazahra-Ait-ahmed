<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
</head>
<body>
    <h2>Bienvenue, <?php echo $_SESSION['login']; ?> !</h2>
    <p>Vous êtes connecté avec succès.</p>
    <?php
    // Exercice 6.3 : Manipulation des dates

    // Question 2 : Nombre de jours restants avant la fin du semestre
    $date_actuelle = new DateTime();
    $date_fin_semestre = new DateTime('2027-01-31');
    $intervalle = $date_actuelle->diff($date_fin_semestre);
    $jours_restants = $intervalle->days;

    echo "<hr>";
    echo "<h3>Exercice 6.3 - Question 2</h3>";
    echo "<p>Nombre de jours restants avant la fin du semestre : " . $jours_restants . " jours</p>";


    // Question 3 : Validation d'une date avec checkdate()
    $jour = 31;
    $mois = 2;
    $annee = 2026;

    echo "<h3>Exercice 6.3 - Question 3</h3>";
    if (checkdate($mois, $jour, $annee)) {
        echo "<p>La date $jour/$mois/$annee est valide.</p>";
    } else {
        echo "<p style='color:red;'>La date $jour/$mois/$annee n'est pas valide !</p>";
    }
    ?>
    
    <a href="deconnexion.php">Se déconnecter</a>
</body>
</html>