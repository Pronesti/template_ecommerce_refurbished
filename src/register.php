<?php
session_start();

if(key_exists($_POST['username'], $_SESSION['usuarios'])){
    header("Location: index.php?page=registerForm");
}else{
    $_SESSION['usuarios'][$_POST['username']] = $_POST['password'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['isLogged'] = true;
    header("Location: index.php");
}
?> 