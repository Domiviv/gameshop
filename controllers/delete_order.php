<?php
require 'models/order.php';
session_start();
if(empty($_SESSION['login']) or $_SESSION['role_id']!=1){
    header('Location: index');
    exit();
}
if(!empty($_GET['id']))
{
    $error='';
    $order = deleteOrder($_GET['id']);
    header('Location: orders');
    exit();
}
?>