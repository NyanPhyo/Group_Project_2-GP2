<?php
$page = 'manage';
session_start();

if(!isset($_SESSION["user_id"]))
{
    header("Location: login.php");
    exit();
}


include 'header.inc';
include 'nav.inc'; 

echo "This is manage.php";
?>