<?php

namespace Way;

final class MotorWay extends HighWay
{

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car )
        {
            $this->setCurrentVehicles(array_push($currentVehicles, $vehicle));
        }
    }


    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

}