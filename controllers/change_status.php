<?php
require 'models/order.php';
session_start();
if(empty($_SESSION['login']) or strtolower($_SESSION['login'])!='admin'){
    header('Location: index');
    exit();
}
if(!empty($_GET['id']) and !empty($_GET['status']))
{
    $error='';
    $res=setStatus($_GET['id'], $_GET['status']);
    header('Location: orders');
    exit();
}
?>
