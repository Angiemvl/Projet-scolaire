<?php

$db_host = "sql208.byethost8.com";
$db_user = "b8_23870543";
$db_pass ="fichiertxt";
$db_name ="b8_23870543_mapremierebdd";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name );

if (mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}