<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['login'])) {
    $_SESSION['login'] = htmlspecialchars($_POST['login']);
    header("Location: profil.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form method="POST" action="">
        <label for="login">Login :</label>
        <input type="text" name="login" id="login" required>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>

<?php
/*
 Exercice 6.2 : Questions / Réponses (Théorie)
 Q1 : Où est stockée une session ? Où est stocké un cookie ?
 Réponse : 
 Une session est stockée CÔTÉ SERVEUR (dans un fichier temporaire sur le serveur).
 Un cookie est stocké CÔTÉ CLIENT (dans le navigateur de l'utilisateur).
 Q2 : Pourquoi setcookie() et header() doivent-ils être appelés avant tout affichage ?
 Réponse : Car ces fonctions modifient les en-têtes HTTP (HTTP Headers). En PHP, les en-têtes 
 doivent obligatoirement être envoyés au navigateur AVANT le moindre affichage de code HTML 
 ou de texte (avant tout echo, print, ou espace vide), sinon PHP déclenche une erreur 
 de type "Headers already sent".
 */
?>