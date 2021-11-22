<?php
require_once 'vehicle/Bicycle.php';
require_once 'vehicle/Car.php';

$twingo = new Car('blue', 2, 'fuel');

// This should return true :
echo $twingo->switchOn() ? 'true </br>' : 'false </br>'; 

// This should return false :
echo $twingo-> switchOff() ? 'true </br>' : 'false </br>';

$vtt = new Bicycle('red', 1);

$vtt->setCurrentSpeed(4);
// This should return false :
echo $vtt->switchOn() ? 'true </br>' : 'false </br>';

// This should return true :
$vtt->SetCurrentSpeed(13);
echo $vtt->switchOn() ? 'true </br>' : 'false </br>';

// This should return false :
echo $vtt->switchOff() ? 'true </br>' : 'false </br>';

