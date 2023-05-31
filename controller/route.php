<?php

$route = str_replace('/', '', $_SERVER['REQUEST_URI']);

$views = array(
    '/' => 'home',
    'home' => 'home',
    'clima' => 'clima',
    'desmatamento' => 'desmatamento',
    'fauna' => 'fauna',
    'vegetacao' => 'vegetacao',
    'galeria' => 'galeria',
    'paisagem' => 'rio',
    'video' => 'video'
);

if (array_key_exists($route, $views)) {
    foreach ($views as $key => $value) {
        if ($route === $key) {
            $route = $value;
        }
    }
} else {
    $route = 'home';
}
