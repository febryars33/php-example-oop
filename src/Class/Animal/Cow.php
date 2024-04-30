<?php

namespace Febryars33\LivingThings\Class\Animal;

use Febryars33\LivingThings\Base\Classification\Animal;
use Febryars33\LivingThings\Interface\UtilityInterface;

class Cow extends Animal implements UtilityInterface
{
    public string $name = 'Sapi';

    public string $food = 'Rumput';

    public static function init(): string
    {
        return (new static)->get();
    }

    public function name(): string
    {
        return $this->name;
    }

    public function walk(): string
    {
        return 'Kaki';
    }

    public function eat(): string
    {
        return $this->food;
    }

    public function get(): string
    {
        return $this->name() . ' adalah ' . $this->classification . ' yang bernafas dengan ' . $this->breath() . ' dan berjalan dengan ' . $this->walk();
    }
}
