<?php
session_start();
$_SESSION['isLogged']=false;
$_SESSION['username']=null;
$_SESSION['carrito']=array();
header("Location: index.php");
?>