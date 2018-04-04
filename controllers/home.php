<?php
require 'models/games.php';
$games = getGames();
require 'views/home.php';
