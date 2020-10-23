<?php


abstract class HighWay 
{
    // Ci-dessous = notation pear =  $_attribut
    protected $_currentVehicles = array(); // Array
    protected $_nbLane; // int
    protected $_maxSpeed; // int


    public function getCurrentVehicles()
    {
        return $this->_currentVehicles;
    }
    public function setCurrentVehicles(int $currentVehicles): void
    {
        $this->_currentVehicles = $currentVehicles;
    }
    
    abstract protected function addVehicle(Car $vehicle); 


    public function getNbLane()
    {
        return $this->_nbLane;
    }
    public function setNbLane(int $_nbLane): void
    {
        $this->_nbLane = $_nbLane;
    }


    public function getMaxSpeed(): int
    {
        return $this->_maxSpeed;
    }
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->_maxSpeed = $maxSpeed;

    }


    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->setNbLane($nbLane);
        $this->setMaxSpeed($maxSpeed);
    }    
}