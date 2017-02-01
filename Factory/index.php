<?php

spl_autoload_register(function($class){
    include $class . '.php';
});

$creator = new carCreator();
$BMW = $creator->load('BMW');
$BMW->setName('BMWs7');
echo $BMW->getName();

