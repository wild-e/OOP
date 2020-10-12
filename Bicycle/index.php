<?php

// il faut appeler l'objet
require_once 'Bicycle.php';

// $bike est une instance de l'objet bicycle
$bike = new Bicycle();
var_dump($bike);
echo '<br>';
// Possiblité de modifier un attribut depuis l'extérieur de l'objet 
$bike->nbWheels = 2;
// var_dump($bike->getColor());
// pour les trucs en private faut faire ça
$bike->setColor('blue');
$bike->setCurrentSpeed(0);
echo '<br>';
var_dump($bike);
echo '<br>';

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
