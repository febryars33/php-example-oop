<?php

namespace Febryars33\LivingThings\Class\Animal;

use Febryars33\LivingThings\Base\Classification\Animal;
use Febryars33\LivingThings\Interface\UtilityInterface;

class Fish extends Animal implements UtilityInterface
{
    public string $name = 'Ikan';

    public string $food = 'Plankton';

    public static function init(): string
    {
        return (new static)->get();
    }

    public function name(): string
    {
        return 'Ikan';
    }

    public function breath()
    {
        return 'Insang';
    }

    public function walk(): string
    {
        return 'Sirip';
    }

    public function eat(): string
    {
        return $this->food;
    }

    public function get(): string
    {
        return $this->name() . ' adalah hewan yang bernafas dengan ' . $this->breath() . ' dan berjalan dengan ' . $this->walk();
    }
}
