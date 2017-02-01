<?php

spl_autoload_register(function($class){
    include $class . '.php';
});


$simple_car = new Car();
$lux_car = new MediumCar($simple_car);
$lux_car->addExtraParams(["big engeen", "ESP"] );
$lux_car->calcCar();
$lux_car->getCarParams("<br>");