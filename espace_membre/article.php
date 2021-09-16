<?php 

if(!isset($_GET['id']) OR !is_numeric($_GET['id'])){
    header('Location:blog.php');
}else{

    extract($_GET);
    $id = strip_tags($id);

    require_once '../include/functions.php';

    if(!empty($_POST)){
        extract($_POST);
        $errors = array();

        $author = strip_tags($author);
        $comment = strip_tags($comment);

        if(empty($author)) 
        array_push($errors, "Entrez un pseudo");

        if(empty($comment))
        array_push($errors, 'Entrez un commentaire');
        if(count($errors) == 0){
            $comment = addComment($id, $author, $comment);
            $success = "Votre commentaire a été publié";
            unset($author);
            unset($comment);
        }
    }

    $article = getArticle($id);
    $comment = getComment($id);
}



?>

<link rel="stylesheet"  href="../css/accueil.css"> 
<link rel="stylesheet"  href="../css/article.css">

<title><?= $article->titre ?></title>






<body>
<img src="../img/bghist.jpg" id="fond" alt="background jessica">
<?php include '../include/header.php'; ?> 
    <main>

    <h1 id="tarticle"><?= $article->titre ?></h1>
    <p class="contenu"><?= $article->contenu ?></p>
    <hr/>

    <?php if(isset($success))
        echo $success;

        if(!empty($errors)):?>

        <?php foreach($errors as $error):?>

            <p class="error"><?=$error ?></p>

        <?php endforeach; ?>    

    <?php endif; ?>

    <?php if (isset($_SESSION['auth'])) :?>
    <form action="article.php?id=<?= $article->id ?>" method="POST">
        <fieldset>

        <legend>Ajoutez un commentaire </legend>
            <p>
                <label for="author">Login :</label><br>
                <input type="text" name="author" id="author" value="<?php if(isset($author)) echo $author ?>">
            </p>

            <p>
                <label for="comments">Commentaire : </label><br/>
                <textarea name="comment" id="comment" cols="30" row="8"></textarea>
            </p>

            <input type="submit" value="Envoyer">

        </fieldset>
<?php endif; ?>

    <h2>Commentaires </h2>

    <div class="com">
    <?php foreach($comment as $com) :?>
        <h3 class="auth"><?= $com->author ?></h3>
        <time><?= $com->date ?></time>
        <p class="oui"><?= $com->comment ?></p> <hr>
    <?php endforeach; ?>
</div>



    </form> 

</main>
</body>
</html>

