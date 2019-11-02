<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'Highway.php';
require_once 'Motorway.php';
require_once 'Pedestrialway.php';
require_once 'Residentialway.php';

$btwin = new Bicycle('blue',1);

$bmw = new Car('black',5,'fuel');
$audi =new Car('green',5,'electric');
$d1 = new Motorway();

$d1->addVehicle($audi);
$d1->addVehicle($bmw);
$d1->addVehicle($btwin);
var_dump($d1->getCurrentVehicles());