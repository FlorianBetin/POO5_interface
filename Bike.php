<?php

require_once 'Vehicle.php';

class Bike extends Vehicle implements LightableInerface
{
    private bool $islighted;

    public function start(): string
    {   
        $startSentence = "";

        $this->currentSpeed = $this->getCurrentSpeed();

        $this->currentSpeed ++;
                $startSentence .= "J'accelère !";
                return $startSentence;
        
    }

    public function switchOn($islighted): string
    {
        if ($this->start()) 
        {
           $this->setIslighted('true');
           return 'Light is on';
        }
    }

    public function switchOff($islighted): string
    {
        if (!$this->start()) 
        {
            $this->setIslighted('false');
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