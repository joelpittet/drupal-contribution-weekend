<?php

include_once '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader, [
    'cache' => 'cache',
    'auto_reload' => true,
]);

echo $twig->render('main.twig');
