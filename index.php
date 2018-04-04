<?php
$path = "/";
//define('URL', '//'.$_SERVER['HTTP_HOST'].$path); // Url complète de la page d'accueil. Domaine + chemin du dossier
$request = str_replace($path, "", $_SERVER['REQUEST_URI']);

if ($request === '' or $request === 'index.php' or $request === 'index')
{
    require 'controllers/home.php';
}
else if ($request === 'listing')
{
    require 'controllers/listing.php';
}
else
{
    echo $request;
    echo '404';
}
