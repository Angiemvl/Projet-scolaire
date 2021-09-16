
<?php if(isset($_POST['envoyer'])){
    if(!empty($_POST['nom']) AND !empty($_POST['email']) AND!empty($_POST['comments'])){
        $header="MIME-Version: 1.0\r\n";
$header.='From:"JessicaJones.com"<cansertpro@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="utf8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
    <body>
        <div align="center">
        <u>Nom de l\'expéditeur : </u>'.$_POST['nom'].'; <br>
        <u>Mail de l\'expéditeur : </u>'.$_POST['email'].'; <br>
        <br>
        '.nl2br($_POST['comments']).'
        </div>
    </body>
</html>
';

mail("cansertpro@gmail.com", "CONTACT - jessicajones.com", $message, $header);
$msg = "Votre mail a bien été envoyé";
    } else {
        $msg = "Tous les champs doivent être complétés !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Contact</title>

    <meta name="description" content="Jessica Jones by Angie Maville">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../css/contact.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <link rel="icon" type="image/gif" href="../img/favicon.ico">

</head>

<body>

    <img src="../img//background2.png" id="fond" alt="jessica background">

    <?php include "../include/header.php" ?>
    
    <main>

        <form action="#" method="POST">

            <p><i>Complétez le formulaire. Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>

            <fieldset>
                <legend>Contact</legend>
                <label for="nom">Nom <em>*</em></label><br/>
                <input id="nom" placeholder="Mon nom" name="nom" autofocus="" required=""><br/>
                <label for="telephone">Portable</label><br/>
                <input id="telephone" name="tel" type="tel" placeholder="06xxxxxxxx" pattern="06[0-9]{8}"><br/>
                <label for="email">Email <em>*</em></label><br/>
                <input id="email" name="email" type="email" placeholder="prenom.nom@mail.com" required=""><br/>
                <label for="comments">Votre message<em>*</em></label><br/>
                <textarea id="comments" name="comments"></textarea>
                <p><input type="submit" name="envoyer" value="Envoyer"></p>
            </fieldset>
        </form>




    </main>


    <img src="../img/jj.jpg" width="100%" height="100%" id="mFond" alt="background mobile">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/accueil.js"></script>

</body>

</html>