<?php

require_once 'Singleton.php';

$singl = Singleton::getInstance();

$singl->setData('1111');
echo $singl->getData();

$singl2 = Singleton::getInstance();

$singl2->setData('2222');
echo $singl2->getData();

echo $singl->getData();

