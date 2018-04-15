<?
require 'models/order.php';
session_start();
if(empty($_SESSION['login']) or strtolower($_SESSION['login'])=='admin'){
    $error = 'Un admin ne peut pas passer de commande';
    header('Location: index');
    exit();
}
else{
  if(!empty($_POST['id'])){
    $id = $_POST['id'];
    $nb_order = newOrder($id);
  }
}
