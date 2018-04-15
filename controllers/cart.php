<?php
require 'models/game.php';
require 'models/cart.php';
session_start();
if(empty($_SESSION['login']) or $_SESSION['role_id']==1){
    $error = 'Un admin ne peut pas passer de commande';
    header('Location: index');
    exit();
}
else{
    $items = cartByUser($_SESSION['id']);
    include 'views/cart.php';
}
?>
