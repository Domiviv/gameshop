<?php
session_start();
if(empty($_SESSION['login']) or strtolower($_SESSION['login'])!='admin'){
    header('Location: index');
    exit();
}
else{
    include 'views/add_game.php';
}

?>
