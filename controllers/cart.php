<?php
require 'models/game.php';
session_start();
if(empty($_SESSION['login']) or $_SESSION['role_id']==1){
    $error = 'Un admin ne peut pas passer de commande';
    header('Location: index');
    exit();
}
else{
    $cartOrder = orderForCart($_SESSION['id']);
    $items = cartByUser($cartOrder['id']);
    include 'views/cart.php';
}
?>
