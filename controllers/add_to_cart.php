<?php
require 'models/order.php';
require 'models/game.php';
require 'models/cart.php';
session_start();
if(empty($_SESSION['login']) or $_SESSION['role_id']==1){
    $error = 'Un admin ne peut pas passer de commande';
    header('Location: index');
    exit();
}
else{
  if(!empty($_POST['id'])){
    $game = getGameById();
    $gtitle = $game['title'];
    $gprice = $game['price'];
    $gid = $game['id'];

  }
}
