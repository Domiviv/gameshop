<?php
require_once ('models/game.php');
session_start();
if(empty($_SESSION['login']) or $_SESSION['role_id']!=1){
    header('Location: index');
    exit();
}
if(!empty($_GET['id']))
{
    $game = getGameById($_GET['id']);
    $title = "Edition du jeu: ".$game['title'];
    $action = "edit_game";
}
include 'views/edit_game.php';
?>
