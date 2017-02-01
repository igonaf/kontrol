<?php

spl_autoload_register(function($class){
    include $class . '.php';
});


$fan1= new Fan('Ivan');
$fan2= new Fan('Vasya');

$team = new Team();

$team->addObserver($fan1);
$team->addObserver($fan2);

echo $team->Event(1);