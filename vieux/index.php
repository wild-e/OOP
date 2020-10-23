<?php

// il faut appeler l'objet
// require_once 'Bicycle.php';
require_once 'Car.php';
// require_once 'Truck.php';
// require_once './Vehicle.php';
// require_once './HighWay.php';
require_once './MotorWay.php';
// require_once './PedestrianWay.php';
// require_once './ResidentialWay.php';

$car = new Car('green', 4, 'electric');
var_dump($car);
echo '<br>';
echo '<br>';


// HIGHWAY TYPE
// $autoroute = new Way\MotorWay(4, 130);
// $autoroute->addVehicle($car);
// var_dump($autoroute);

// echo $autoroute->getCurrentVehicles();
echo '<br>';
echo '<br>';

// $pedestrian = new Way\PedestrianWay();
// var_dump($pedestrian);
// echo '<br>';
// echo '<br>';
// $residence = new Way\ResidentialWay();
// var_dump($residence);
// echo '<br>';

// // Mon 1er truck
// $maurice = new Truck('200', 'blue', 3, 'electric');
// var_dump($maurice);
// echo '<br>';
// $maurice->isItLoaded();
// echo '<br>';
// echo $maurice->forward();
// echo $maurice->brake();
// echo '<br>';

// // Mon 2éme truck
// $bob = new Truck('1000', 'purple', 1, 'huile de foie de morue');
// var_dump($bob);
// echo '<br>';
// $bob->isItLoaded();
// echo '<br>';
// echo $bob->forward();
// echo $bob->brake();
// echo '<br>';

// // voiture
// $car = new Car('green', 4, 'electric');
// echo $car->forward();
// var_dump($car);

// // Vélo
// echo '<br>';
// $bicycle = new Bicycle('blue', 1);
// echo $bicycle->forward();
// var_dump($bicycle);

// // Const car
// echo '<br>';
// var_dump(Car::ALLOWED_ENERGIES);



//POO précédents :

// $renaultZoe = new Car('white', 5, '95%');
// var_dump($renaultZoe);
// echo '<br>';

// $peugeot206 = new Car('grey', 4, 'pas folichon');
// var_dump($peugeot206);
// echo '<br>';
// // Moving car
// echo $renaultZoe->start();
// echo '<br>';
// echo $renaultZoe->forward();
// echo '<br>';
// echo $renaultZoe->brake();



// // $bike est une instance de l'objet bicycle
// $bike = new Bicycle();
// var_dump($bike);
// echo '<br>';
// // Possiblité de modifier un attribut depuis l'extérieur de l'objet 
// $bike->nbWheels = 2;
// // var_dump($bike->getColor());
// // pour les trucs en private faut faire ça
// $bike->setColor('blue');
// $bike->setCurrentSpeed(0);
// echo '<br>';
// var_dump($bike);
// echo '<br>';

// // Moving bike
// echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
// echo $bike->brake();


