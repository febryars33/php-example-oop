<?php

namespace Febryars33\LivingThings\Base;

use Febryars33\LivingThings\Interface\CharacterInterface;

abstract class LivingThings implements CharacterInterface
{
    public function breath()
    {
        return 'Paru - Paru';
    }

    public function sight()
    {
        return 'Mata';
    }
}
