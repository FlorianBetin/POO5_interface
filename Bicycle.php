<?php

// require_once 'Vehicle.php';
require_once 'Bike.php';

class Bicycle extends Bike implements LightableInerface

{

    public function switchOn($islighted): string
    {
        if ($this->start() && $this->getCurrentSpeed() > 10) 
        {
            $this->setIsLighted('true');;
           return 'Light is on';
        }
    }

    public function switchOff($islighted): string
    {
        if (!$this->start() && $this->getCurrentSpeed() > 10) 
        {
            $this->setIsLighted('false');;
           return 'Light is off';
        }
    }

}