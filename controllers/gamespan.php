<?php
require_once ('models/game.php');
session_start();
if(empty($_SESSION['login']) or $_SESSION['role_id']!=1){
    header('Location: index');
    exit();
}
$games = getGames();
include 'views/gamespan.php';
?>
