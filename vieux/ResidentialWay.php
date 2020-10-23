<?php

namespace Way;

final class ResidentialWay extends HighWay
{

        /**
     * @var array
     */
    private $currentVehicles;

    /**
     * @var int
     */
    private $nbLane = 2;

    /**
     * @var int
     */
    private $maxSpeed = 50;

    public function addVehicle($vehicle){
        $currentVehicles = array_push($vehicle);
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