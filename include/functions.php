<?php

function debug($variable){
       echo '<pre>' . print_r($variable, true) . '</pre>';
}

function str_random($length){
    $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";

    return substr(str_shuffle(str_repeat($alphabet, $length)),0, $length);
}

function logged_only(){

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION['auth'])){

     $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page"; 
     
     header('Location: login.php');

     exit();
}
}

// ARTICLES


function getArticles(){
    require '../espace_membre/db.php';

    $req = $pdo->prepare('SELECT id, titre, date FROM blog ORDER BY id DESC');

    $req->execute();

    $data = $req->fetchAll(PDO::FETCH_OBJ);

    return $data;
    $req->closeCursor();
}

function getArticle($id){
    require '../espace_membre/db.php';

    $req = $pdo->prepare('SELECT * FROM blog WHERE id =?');

    $req->execute(array($id));

    if ($req->rowCount() == 1){
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    }else{
        header('Location: blog.php');
        $req->closeCursor();
    }
   
}

// COMMENTAIRES

function addComment($articleId, $author, $comment){
    require '../espace_membre/db.php';

    $req = $pdo->prepare('INSERT INTO comment (articleId, author, comment, date) VALUES
    (?, ?, ?, NOW())');
    $req->execute(array($articleId, $author, $comment));
    $req->closeCursor();

}

function getComment($id){
    require '../espace_membre/db.php';

    $req = $pdo->prepare('SELECT * FROM comment WHERE articleid = ?');
    
    $req->execute(array($id));

    $data = $req->fetchAll(PDO::FETCH_OBJ);

    return $data;

    $req->closeCursor();
    

}
