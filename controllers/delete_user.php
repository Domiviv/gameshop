<?php
require 'models/user.php';
session_start();
if(empty($_SESSION['login']) or strtolower($_SESSION['login'])!='admin'){
    header('Location: index');
    exit();
}
if(!empty($_GET['id']))
{
    $user = deleteUser($_GET['id']);
    header('Location: users');
    exit();
}
