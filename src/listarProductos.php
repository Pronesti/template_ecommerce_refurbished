<?php
session_start();
include_once("productos.php");
include_once("../lib/TemplateEngine.php");
$te = new TemplateEngine("../templates/index.template");
$te->addVariable("title","Lista Productos");
$te->addVariable("username",$_SESSION['username']);
$lista="";
foreach ($productos as $key => $item) {
$prod = new TemplateEngine("../templates/producto.template");
$prod->addVariable("url",$item['url']);
$prod->addVariable("name",$item['name']);
$prod->addVariable("price",$item['price']);
$prod->addVariable("quantity",$item['quantity']);
$prod->addVariable("key",$key);
$lista .= $prod->render();
}

$te->addVariable("contenido",$lista);
//echo $te->render();
return $lista;
    ?>