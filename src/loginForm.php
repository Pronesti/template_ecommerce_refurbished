<?php
session_start();
include_once("../lib/TemplateEngine.php");
$te = new TemplateEngine("../templates/index.template");
$nav = new TemplateEngine("../templates/navbar.template");
$nav->addVariable("username", $_SESSION['username']);
$te->addVariable("navbar", $nav->render());
$te->addVariable("contenido", $lista);
$user = new TemplateEngine("../templates/user.template");
$user->addVariable("title", "Login");
$user->addVariable("url", "login");
$user->addVariable("extra", "<a href='index.php?page=registerForm' class='btn btn-warning float-right w-25'>Register</a>");
$te->addVariable("contenido",$user->render());
echo $te->render();
