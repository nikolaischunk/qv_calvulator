<?php


$db_host = 'localhost';
$db_name = "qv_calculator";
$db_user = "root";
$db_passwd = "e266f52c";


$conn = new mysqli($db_host, $db_user, $db_passwd, $db_name);

if (mysqli_connect_ERROR()) {
    echo mysqli_connect_ERROR();
    exit;
}
?>