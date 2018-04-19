<?php
require_once ('models/order.php');
session_start();
if(empty($_SESSION['login']) or $_SESSION['role_id']==1){
    header('Location: index');
    exit();
}
if(!empty($_GET['id']))
{
    $order=getOrderById($_GET['id']);
    $res=purchase($_GET['id'], $order['status_id']);
    header('Location: cart');
    exit();
}
?>
