<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        'huile de foie de morue',
    ];
    /**
     * @var int
     */
    private $loadCapacity;

    /**
     * @var int
     */
    private $load = 0;

    /**
     * @var string
     */
    private $energy;

    public function __construct(int $loadCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->loadCapacity = $loadCapacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getLoadCapacity(): int
    {
        return $this->loadCapacity;
    }

    public function setLoadCapacity(int $loadCapacity): int
    {
        $this->loadCapacity = $loadCapacity;
    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load): int
    {
        $this->load = $load;
    }

    public function isItLoaded(): void
    {
        if($this->load == $this->loadCapacity){
            echo "full";
        }else{
            echo "in filling";
        }
    }
}