<?php

require_once 'Car.php';

$renaultZoe = new Car('white', 5, '95%');
var_dump($renaultZoe);
echo '<br>';

$peugeot206 = new Car('grey', 4, 'pas folichon');
var_dump($peugeot206);
echo '<br>';
// Moving car
echo $renaultZoe->start();
echo '<br>';
echo $renaultZoe->forward();
echo '<br>';
echo $renaultZoe->brake();


