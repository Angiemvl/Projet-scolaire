<?php

$db_host = "localhost";
$db_user = "root";
$db_pass ="";
$db_name ="groupe8bdd";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name );

if (mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}