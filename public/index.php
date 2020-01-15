<?php
include_once("../lib/Router.php");
$page = $_GET['page'];
$router = new Router();
$router->addRoute("loginForm","../src/loginForm.php");
$router->addRoute("registerForm","../src/registerForm.php");
$router->addRoute("carrito","../src/carrito.php");
$router->addRoute("productos","../src/productos.php");
$router->addRoute("listarProductos","../src/listarProductos.php");
$router->addRoute("login","../src/login.php");
$router->addRoute("logout","../src/logout.php");
$router->addRoute("register","../src/register.php");
$router->addRoute("eliminarDelCarrito","../src/eliminarDelCarrito.php");
//$router->addRoute("","../src/index.php");
if(isset($_GET['page'])){
    include_once($router->match($page));
}else{
    include_once("../src/index.php");
}