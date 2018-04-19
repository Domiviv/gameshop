<?php
require_once ('models/cart.php');
session_start();
if(empty($_SESSION['login'])){
  header('Location: login');
}
elseif($_SESSION['role_id']==1){
    $error = 'Un admin ne peut pas passer de commande';
    header('Location: index');
    exit();
}
else{
    $res = addToCart($_SESSION['id'], $_POST['id'], $_POST['price']);
    
}
