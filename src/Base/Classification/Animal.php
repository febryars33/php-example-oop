<?php

namespace Febryars33\LivingThings\Base\Classification;

use Febryars33\LivingThings\Base\LivingThings;
use Febryars33\LivingThings\Interface\Animal\CharacteristicInterface;

abstract class Animal extends LivingThings implements CharacteristicInterface
{
    public string $name;

    public string $food;

    public string $classification = 'Hewan';
}
