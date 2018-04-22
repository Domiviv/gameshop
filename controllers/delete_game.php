<?php
require_once ('models/game.php');
session_start();
if(empty($_SESSION['login']) or $_SESSION['role_id']!=1){
    header('Location: index');
    exit();
}
if(!empty($_GET['id']))
{
    $error='';
    $infos = getInfosById($_GET['id']);
    if($infos){
      $res = deleteInfo($infos['id']);
    }
    $game = deleteGame($_GET['id']);
    $imgToUnlink = 'img/games/gameNb' . $_GET['id'] . '.jpg';
    if(!unlink($imgToUnlink)){
      $error = 'La suppression de l\'image a échoué';
    };
    header('Location: gamespan');
    exit();
}
