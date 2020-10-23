<?php

// require 'HighWay.php';

final class MotorWay extends HighWay
{

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car){
            $this->_currentVehicles[] = $vehicle;
            echo'Yes it\'s added !';
        }else{
            echo 'No you can\'t add it !';
        }
    }


    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

}