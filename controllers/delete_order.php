<?php
require 'models/order.php';
session_start();
if(empty($_SESSION['login']) or strtolower($_SESSION['login'])!='admin'){
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
