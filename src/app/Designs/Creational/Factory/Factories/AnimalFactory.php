<?php

namespace App\Designs\Creational\Factory\Factories;

use App\Designs\Creational\Factory\Products\Contracts\Animal;

abstract class AnimalFactory
{
    abstract public function getAnimal(): Animal;

    public function createAnimal(): string
    {
        return (string) $this->getAnimal();
    }
}
