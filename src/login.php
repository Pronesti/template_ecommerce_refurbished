<?php
session_start();

if(key_exists($_POST['username'], $_SESSION['usuarios']) && $_SESSION['usuarios'][$_POST['username']] == $_POST['password']){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['isLogged'] = true;
    header("Location: index.php");
}else{
    header("Location: index.php?page=loginForm");
    echo $_POST['password'];
    echo "</br>";
    echo $_SESSION['usuarios'][$_POST['username']];
    echo "</br>";
    print_r($_SESSION);
}
?> 