<?php

// require 'HighWay.php';

final class ResidentialWay extends HighWay
{

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Vehicle){
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