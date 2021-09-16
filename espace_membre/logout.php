<?php 

session_start();

unset($_SESSION['auth']);

$_SESSION['flash']['success'] = 'Vous êtes maitenant déconnecté(e)';

header('Location:login.php');