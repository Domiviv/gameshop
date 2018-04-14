<?php
require 'models/game.php';
session_start();
$games = getGames();
require 'views/home.php';
?>
