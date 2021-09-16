<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/contact.css">
        <link rel="stylesheet" href="../css/login.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <link rel="icon" type="image/gif" href="../img/favicon.ico">

    <title>Connexion</title>
</head>

<body>


<img src="../img/capture3.jpg" id="fond" alt="background">

<?php require "../include/header.php" ?>

<?php

if(!empty($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])){

    require_once 'db.php';
    require_once '../include/functions.php';

    $req = $pdo->prepare('SELECT * FROM membre WHERE (login = :login OR email = :login) AND confirmed_at is NOT NULL');

    $req->execute(['login' => $_POST['login']]);

    $user = $req->fetch();

    if(password_verify($_POST['pass'], $user->pass)){
        $_SESSION['auth'] = $user;

        $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté(e)';

        header('Location:account.php');

        exit();

    }else{

        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrect';

    }

}
?>


    <form action="" method="POST">


        <fieldset>
            <legend>Connexion</legend>
            <label for="login">Login ou email</label><br>
            <input id="login" name="login" type="text" autofocus="" required="" value=""><br>
            <label for="pass"> Mot de passe</label><br>
            <input id="pass" name="pass" type="password" required="" value="">

            <p><input type="submit" value="Connexion" name="connexion"></p><br>

            <h4>Vous n'êtes pas inscrit ? Cliquez <a href="inscription.php"><em> ici </em></a> pour vous inscrire</h4>

        </fieldset>
    </form>


    <?php require "../include/footer.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/accueil.js"></script>
</body>

</html>