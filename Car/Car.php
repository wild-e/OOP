<?php

class Car {
    /**
    * @var integer
    */
    private $nbWheels;

    /**
    * @var integer
    */
    private $currentSpeed;

    /**
    * @var string
    */
    private $color;

    /**
    * @var integer
    */
    private $nbSeats;

    /**
    * @var string
    */
    private $energy;

        /**
    * @var integer
    */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energyLevel)
      {
          $this->color = $color;
          $this->$nbSeats = $nbSeats;
          $this->energyLevel = $energyLevel;
      }

    public function start()
    {
        return "Start!";
    }

    public function forward()
    {
        return "Go !";
        
    }

    public function brake()
    {
        echo "Stoooooop!";
    }

    /**
    * @return int
    */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

        /**
    * @return int
    */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

        /**
    * @return string
    */
    public function getColor(): int
    {
        return $this->color;
    }

        /**
    * @return int
    */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

        /**
    * @return string
    */
    public function getEnergy(): int
    {
        return $this->energy;
    }

        /**
    * @return int
    */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

}