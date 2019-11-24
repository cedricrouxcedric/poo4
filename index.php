<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'Highway.php';
require_once 'Motorway.php';
require_once 'Pedestrialway.php';
require_once 'Residentialway.php';
require_once 'Speedometer.php';

$btwin = new Bicycle('blue',1);

$bmw = new Car('black',5,'fuel');
$audi =new Car('green',5,'electric');
$d1 = new Motorway();



$bmw->setparkbreak();
var_dump($bmw);
try {
    echo $bmw->start();
} catch (Exception $e) {
    echo $e->getMessage();
    $bmw->setParkBreak();
} finally {
    echo "Ma voiture roule comme un donut<br>";
}
$bmw->setParkBreak();
var_dump($bmw);
try {
    echo $bmw->start();
    } catch (Exception $e) {
    echo $e->getMessage();
    $bmw->setParkBreak();
} finally {
    echo "Ma voiture roule comme un donut<br>";
}
echo"<br>";
$kmToMiles = Speedometer::kmToMiles(10);
$milesToKm = Speedometer::milesToKm(1);

echo "10 Kilométre correspond à . $kmToMiles . Miles";
echo"<br>";
echo "1 Miles correspond à . $milesToKm . Kilosmétres";
