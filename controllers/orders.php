<?php
session_start();
require 'models/order.php';
if(empty($_SESSION['login']) or strtolower($_SESSION['login'])!='admin'){
    header('Location: index');
    exit();
}
else{
  $orders = getOrders();
  include 'views/orders.php';
}
?>
