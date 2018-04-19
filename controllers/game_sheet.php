<?php
require_once ('models/game.php');
session_start();
if(!empty($_GET['id']))
{
    $game = getGameById($_GET['id']);
    $title = 'Fiche: ' . $game['title'];
}
include 'views/game_sheet.php';
?>
