<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="../css/contact.css">
	<link rel="stylesheet" href="../css/inscription.css">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="icon" type="image/gif" href="../img/favicon.ico">


	<title>Inscription</title>
</head>
<?php require_once '../include/functions.php' ;

session_start();

if(!empty($_POST)){

	$errors = array();
	require_once 'db.php';

	if(empty($_POST['login']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['login'])){
		$errors['login'] = "Votre pseudo n'est pas valide";
	}else{
		$req= $pdo->prepare('SELECT id FROM membre WHERE login= ?');
		$req->execute([$_POST['login']]);

		$user = $req->fetch();

		if($user){
			$errors['login'] = 'Ce pseudo est déjà pris';
		}
	}

	if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

		$errors['email'] = "Votre email n'est pas valide";
	}else{
		$req= $pdo->prepare('SELECT id FROM membre WHERE email= ?');
		$req->execute([$_POST['email']]);

		$user = $req->fetch();

		if($user){
			$errors['email'] = 'Cet email est déjà pris';
		}
	}

	if(empty($_POST['email']) || $_POST['password'] != $_POST['password_confirm']){
		$errors['password'] = "Vous devez entrer un mot de passe valide";
	}

	if(empty($errors)){

		
		$req = $pdo->prepare('INSERT INTO membre SET login= ?, email = ?, pass = ?, confirmation_token = ?');

		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

		$token =  str_random(60);

		$req->execute([$_POST['login'], $_POST['email'], $password, $token]);

		$user_id = $pdo->lastInsertId();

		mail($_POST['email'], 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://localhost/Jessica_Jones2/espace_membre/confirm.php?id=$user_id&token=$token");

		$_SESSION['flash']['success'] = "Un email de confirmation vous a été envoyé !";

		header('Location: login.php');

		exit();
		
	}

}





?>

<body>

	

	 <img src="../img/jkg.jpg" id="fond" alt="background"> 

	<?php require "../include/header.php" ?>

<?php if(!empty($errors)): ?>

	<div class="alert">
		<p>Vous n'avez pas rempli le formulaire correctement</p>

		<ul>
			<?php foreach($errors as $error):?>

				<li><?= $error; ?></li>
			
			<?php endforeach; ?>

		</ul>	
	</div>

<?php endif; ?>

	<form action="" method="POST">
		<fieldset>
			<legend>Inscription</legend>
			<label for="login">Login</label><br>
			<input type="text" id="login" name="login" required><br>

			<label for="email">Adresse e-mail</label><br>
			<input type="text" id="email" name="email" required="" value=""><br />


			<label for="password"> Mot de passe</label><br>
			<input type="password" id="password" required="" name="password" value=""><br />

			<label for="password_confirm"> Confirmation du mot de passe</label><br>
			<input type="password" id="pass_confirm" name="password_confirm" required="" value=""><br />

			<input type="submit" name="forminscription" value="Inscription">

    	</fieldset>
	</form>

	<?php
        include "../include/footer.php" ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="../js/accueil.js"></script>

</body>
</html>