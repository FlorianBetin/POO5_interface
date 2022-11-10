<?php

// require_once 'Bicycle.php';
require 'classes.php';


$redCar = new Cars('red', 5, "fuel");
$redCar->setHasParkBrake(true);
$redCar->setCurrentSpeed(0);
$redCar->setEnergyLevel(10);

$blueCar = new Cars ('blue', 4, 'fuel');
$blueCar->setHasParkBrake(false);
$blueCar->setCurrentSpeed(0);
$blueCar->setEnergyLevel(10);

try{
    $redCar->start();
}catch(Exception $e){
    echo $e->getMessage() . PHP_EOL;
    $redCar->setHasParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut' . PHP_EOL;
}

try{
    $blueCar->start();
}catch(Exception $e){
    echo $e->getMessage() . PHP_EOL;
    $blueCar->setHasParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut' . PHP_EOL;
}
?>
