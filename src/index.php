<?php
session_start();
require_once("../lib/TemplateEngine.php");

if(!isset($_SESSION['usuarios'])){
    $_SESSION['usuarios'] = array();
}
if(!isset($_SESSION['username'])){
    $_SESSION['username'] = "";
}
if(!isset($_SESSION['isLogged']) || !$_SESSION['isLogged']){
    header("Location: index.php?page=loginForm");
}
if(isset($_GET['item'])){
    $_SESSION['carrito'][] = $_GET['item'];
}

include_once("listarProductos.php");
$te = new TemplateEngine("../templates/index.template");
$nav = new TemplateEngine("../templates/navbar.template");
$nav->addVariable("username", $_SESSION['username']);
$te->addVariable("navbar", $nav->render());
$te->addVariable("contenido", $lista);
echo $te->render();
?>