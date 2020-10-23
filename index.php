<?php

require 'HighWay.php';
require 'MotorWay.php';
require 'PedestrianWay.php';
require 'ResidentialWay.php';
require 'Vehicle.php';
require 'Car.php';
require 'Bike.php';
require 'Skateboard.php';


// Vehicles
$car = new Car;
$trucARoues = new Vehicle;
$bike = new Bike;
$skateboard = new Skateboard;

// Ways
$a4 = new MotorWay(4, 130);
$rueDu22Novembre = new ResidentialWay(2, 50);
$pedestrian = new PedestrianWay(1, 10);

// adding vehicles 
echo '<br>';
$a4->addVehicle($car);
echo '<br>';
$a4->addVehicle($bike);
echo '<br>';
$pedestrian->addVehicle($bike);
echo '<br>';
$pedestrian->addVehicle($car);
echo '<br>';
$rueDu22Novembre->addVehicle($trucARoues);
echo '<br>';
$rueDu22Novembre->addVehicle($skateboard);
