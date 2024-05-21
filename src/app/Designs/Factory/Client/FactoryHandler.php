<?php

namespace App\Designs\Factory\Client;

use App\Designs\Factory\Factories\AnimalFactory;

class FactoryHandler
{
    private AnimalFactory $factory;

    public function setFactory(AnimalFactory $factory): void
    {
        $this->factory = $factory;
    }

    public function getFactory(): AnimalFactory
    {
        return $this->factory;
    }

    public function runAnimal(): string
    {
        return $this->getFactory()->runAnimal();
    }
}
