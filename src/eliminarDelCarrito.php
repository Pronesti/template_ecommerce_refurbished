<?php
session_start();
unset($_SESSION['carrito'][$_GET['item']]);
header("Location: index.php?page=carrito");