<?php
require_once ('models/game.php');
session_start();
if(empty($_SESSION) or $_SESSION['role_id']!= 1){
  header('Location: index');
  exit();
}

$type = $_POST['type'];
$editor = $_POST['editor'];
$values = array('type' => $type, 'editor' => $editor);
$result = setInfosById($_POST['id'], $values);
header('Location: index');
?>
