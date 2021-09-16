<?php
session_start();
if (!isset($_SESSION['login'])) {
	header ('Location: login.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

<body>
Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br />
<a href="deconnexion.php">Déconnexion</a>
</body>
</html>