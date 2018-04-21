<?php
require_once ('models/game.php');
session_start();
if(!empty($_GET['id']))
{
    $game = getGameById($_GET['id']);
    $title = 'Fiche: ' . $game['title'];
    $infos = getInfosById($_GET['id']);
}
include 'views/game_sheet.php';
?>
