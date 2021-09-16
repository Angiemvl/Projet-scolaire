<?php session_start();

require '../include/functions.php';

logged_only();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="../css/contact.css">	
	<link rel="stylesheet"  href="../css/account.css">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="icon" type="image/gif" href="../img/favicon.ico">


    <title>Votre compte</title>

</head>

<body>

<img src="../img/capture3.jpg" id="fond" alt="background">


<?php require '../include/header.php'; ?>

<h1>Bonjour <?= $_SESSION['auth']->login; ?> </h1>



<?php require '../include/footer.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/accueil.js"></script>

</body>

</html>