<?php

namespace App\Designs\Creational\AbstractFactory\Products;

use App\Designs\Creational\AbstractFactory\Products\Contracts\Dog;

class HomeDog implements Dog
{
    public function run(): string
    {
        return 'Home dog is running';
    }
}