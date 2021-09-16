<?php 
if(session_status() == PHP_SESSION_NONE){

    session_start();

}
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta name="description" content="Jessica Jones by Angie Maville">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">

</head>
<header>
    <nav>
        <ul>
            <a href="../html/accueil.php">
                <li id="active" class="liSite">ACCUEIL</li>
            </a>
            <a href="../html/histoire.php">
                <li id="hi" class="liSite">SON HISTOIRE</li>
            </a>
            <a href="../html/image.php">
                <li id="im" class="liSite">GALERIE</li>
            </a>
            <a href="../espace_membre/blog.php">
                <li id="bl" class="liSite">BLOG</li>
            </a>
            <a href="../html/contact.php">
                <li class="liSite" id="cont"> CONTACT</li>
            </a>

            <?php if (isset($_SESSION['auth'])) :?>

                 <a href="../espace_membre/account.php" id="mon"><li class="liSite">MON COMPTE</li></a>
                 <a href="../espace_membre/logout.php"><li class="liSite">SE DECONNECTER</li></a>


            <?php else: ?>
                <a href="../espace_membre/login.php"><li id="lo" class="liSite">SE CONNECTER</li></a>
                <a href="../espace_membre/inscription.php"> <li class="liSite" id="inscr">INSCRIPTION</li></a>

            <?php endif; ?>

        </ul>
    </nav>

    <i class="fas fa-times" id="croix"></i>
    <i class="fas fa-bars" id="barre"></i>

    <img src="../img/logodetoure.png" id="logo">
</header>

<?php if(isset($_SESSION['flash'])): ?>

<?php foreach($_SESSION['flash'] as $type => $message) : ?>

<div class="alert-<?= $type; ?>">

    <?= $message; ?>

</div>

<?php endforeach; ?>

<?php unset($_SESSION['flash']); ?>
<?php endif; ?>