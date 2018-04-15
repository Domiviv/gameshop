<?php
require 'models/game.php';
session_start();
if(empty($_SESSION['login']) or $_SESSION['role_id']!=1){
    header('Location: index');
    exit();
}
else{
  if(!empty($_POST['gtitle']) AND !empty($_POST['price']))
  {
    $gtitle = $_POST['gtitle'];
    $price = $_POST['price'];
    $values = array('title' => $gtitle, 'price' => $price);
    $game = newGame($values);
    header('Location: gamespan');
    exit();
  }
}


?>
