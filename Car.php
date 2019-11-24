<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var boolean
     */
    private $hasParkBreak = true ;

    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    /**
     * @return bool
     */
    public function getparkbreak()
    {
        return $this->hasParkBreak;
    }

    /**
     * @return void
     */
    public function setParkBreak()
    {
        $this->hasParkBreak = !$this->hasParkBreak;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     * @return Car
     */
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * @return bool
     */
     public function switchOn(): bool
     {
          return true ;
     }

    /**
     * @return bool
     */
     public function switchOff(): bool
     {
         return false;
     }
     public function start()
     {    if ($this->getparkbreak())
        {
            throw new Exception('OULALA j\'ai encore oublié le frein à main');
        }
         $this->currentSpeed = 0;
         return"En voiture Simone";
     }
}