<?php

namespace Febryars33\LivingThings\Class\Plant;

use Febryars33\LivingThings\Base\Classification\Plant;
use Febryars33\LivingThings\Interface\UtilityInterface;

class Flower extends Plant implements UtilityInterface
{
    public string $name = 'Bunga';

    public string $food = 'Oxygen';

    public static function init(): string
    {
        return (new static)->get();
    }

    public function breath()
    {
        return 'Stomata';
    }

    public function name(): string
    {
        return $this->name;
    }

    public function eat(): string
    {
        return $this->food;
    }

    public function get(): string
    {
        return $this->name() . ' adalah ' . $this->classification . ' yang bernafas dengan ' . $this->breath();
    }
}
