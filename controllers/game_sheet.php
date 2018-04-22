<?php
require_once ('models/game.php');
session_start();
if(!empty($_GET['id']))
{
    $game = getGameById($_GET['id']);
    $title = 'Fiche: ' . $game['title'];
    $infos = getInfosById($_GET['id']);
    if(!$infos){
      $ed = 'rédaction en cours';
      $type = 'rédaction en cours';
      $values = array('type' => $type, 'editor' => $ed, 'item_id' => $game['id']);
      $res = newInfos($values);
      $flag = true;
    }
    include 'views/game_sheet.php';
}
?>
