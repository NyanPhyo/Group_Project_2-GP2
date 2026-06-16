<?php

session_start();

/* remove all session variables */
$_SESSION = array();

/* destroy session */
session_destroy();

/* redirect to home page */
header("Location: index.php");
exit();

?>