<?php

require_once 'Vehicle.php';

class Cars extends Vehicle implements LightableInerface
 {
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',];

    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake;

    private bool $islighted;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Cars
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {   
        $startSentence = "";
        $this->hasParkBrake = $this->getHasParkBrake();
        $this->currentSpeed = $this->getCurrentSpeed();
        $this->energyLevel = $this->getEnergyLevel();
        if ($this->hasParkBrake == true)
        {
            throw new Exception('Le frein à main est enclenché ! Je le retire !');
        } else {
            while($this->currentSpeed < $this->getEnergyLevel()) {
                $this->currentSpeed ++;
                $startSentence .= "J'accelère !";
            }
        }

        return $startSentence;
    }

    public function switchOn($islighted): string
    {
        if ($this->start()) 
        {
            $this->setIsLighted('true');
           return 'Light is on';
        }
    }

    public function switchOff($islighted): string
    {
        if (!$this->start()) 
        {
           $this->setIsLighted('false');
           return 'Light is off';
        }
    }


    /**
     * Get the value of islighted
     */ 
    public function getIslighted()
    {
        return $this->islighted;
    }

    /**
     * Set the value of islighted
     *
     * @return  self
     */ 
    public function setIslighted($islighted)
    {
        $this->islighted = $islighted;

        return $this;
    }
}