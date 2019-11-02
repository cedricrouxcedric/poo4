<?php


require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    /**
     * @retutn bool
     */
    public function switchOn() : bool
    {
        if ($this->currentSpeed > 10) {
            return true;
        }
    }

    /**
     * @return bool
     */

    public function switchOff() : bool
    {
        return false;
    }
}