    <?php 
    
    require '../include/functions.php'; 
    
    $articles = getArticles();
    ?>
    
    
    <title>Blog</title>

    <link rel="stylesheet"  href="../css/accueil.css">

    <link rel="stylesheet" href="../css/blog.css">

<body>

    <img src="../img/header2.jpg" id="fond" alt="background jessica">

    <?php include "../include/header.php" ?>

    <main>

        <h1 id="art">Articles</h1>
<div class="arts">
        <?php foreach($articles as $article): ?>

        <h2><?= $article->titre ?></h2>
        <time><?= $article->date ?></time><br>
        <a href="article.php?id=<?= $article->id ?>"> Lire la suite </a>

        <?php endforeach; ?>
</div>  

        <!-- <?php if (isset($_SESSION['auth'])) :?>
        <form action="blog.php" method="post">


            <fieldset>
                <legend>Ajouter un article</legend>
                <label for="titre">Titre</label>
                <input id="titre" name="titre" type="text" autofocus="" required="" value=""><br>
                <label for="contenu">Contenu</label>
                <textarea id="contenu" name="contenu"></textarea>
                
                <input type="file" name="photo">
                <p>Choisissez une photo avec une taille inférieure à 2 Mo.</p>
                
                <input type="submit" value="Publier" name="publication">
            </fieldset>
        </form>
        <?php endif; ?> -->
    </main>

    <?php include "../include/footer.php" ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/accueil.js"></script>

</body>

</html>