<?php
require 'models/user.php';
session_start();
if(empty($_SESSION['login']) or strtolower($_SESSION['login'])!='admin'){
    header('Location: index');
    exit();
}
if(!empty($_GET['id']))
{
    $user = getUserById($_GET['id']);
    $title = "Edition de l'utilisateur: ".$user['login'];
    $action = "edit_user";
}
include 'views/user.php';
?>
