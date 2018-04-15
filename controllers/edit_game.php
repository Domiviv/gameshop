<?php
require 'models/game.php';
session_start();
if(empty($_SESSION['login']) or $_SESSION['role_id']!=1){
    header('Location: index');
    exit();
}
if(!empty($_POST['id']))
{
  $gtitle = $_POST['gtitle'];
  $price = $_POST['price'];
  $values = array('title' => $gtitle, 'price' => $price);
  setGame($_POST['id'], $values);
  header('Location: gamespan');
  exit();
}
?>
