<?php
require 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

// Adding a custom filter to reverse a string
$twig->addFilter(new \Twig\TwigFilter('reverse', function ($string) {
    return strrev($string);
}));

echo $twig->render('index.html.twig', ['name' => 'Don', 'title' => 'My Web Page']);

