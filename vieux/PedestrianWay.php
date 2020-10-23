<?php

namespace Way;

final class PedestrianWay extends HighWay
{

        /**
     * @var array
     */
    private $currentVehicles;

    /**
     * @var int
     */
    private $nbLane = 1;

    /**
     * @var int
     */
    private $maxSpeed = 10;

    public function addVehicle($vehicle){
        array_push($currentVehicles, $vehicle);
    }
    
    // public function getCurrentVehicles(): array
    // {
    //     return $this->currentVehicles;
    // }

    // public function setCurrentVehicles(array $currentVehicles): void
    // {
    //     $this->currentVehicles = $currentVehicles;
    // }


    // public function getNbLane(): int
    // {
    //     return $this->nbLane;
    // }

    // public function setNbLane(int $nbLane): void
    // {
    //     $this->nbLane = $nbLane;

    // }


    // public function getMaxSpeed(): int
    // {
    //     return $this->maxSpeed;
    // }

    // public function setMaxSpeed(int $maxSpeed): void
    // {
    //     $this->maxSpeed = $maxSpeed;

    // }
    // public function __construct(int $nbLane, int $maxSpeed)
    // {
    //     parent::__construct($nbLane, $maxSpeed);
    // }

}