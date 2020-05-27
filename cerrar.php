<?php session_start();
session_destroy();

$SESSION = array();

header('Location: entrad.php');


?>
