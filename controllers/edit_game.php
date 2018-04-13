<?php
require 'models/game.php';
session_start();
if(empty($_SESSION['login']) or strtolower($_SESSION['login'])!='admin'){
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
