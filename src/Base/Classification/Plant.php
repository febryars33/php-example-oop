<?php

namespace Febryars33\LivingThings\Base\Classification;

use Febryars33\LivingThings\Base\LivingThings;

abstract class Plant extends LivingThings
{
    protected string $name;

    protected string $food;

    protected $classification = 'Tumbuhan';
}
