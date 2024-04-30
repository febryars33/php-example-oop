<?php

declare(strict_types=1);

use Febryars33\LivingThings\Class\Plant\Flower;
use PHPUnit\Framework\TestCase;

final class FlowerTest extends TestCase
{
    public function testOutput(): void
    {
        $flower = new Flower;

        $this->assertSame('Bunga adalah Tumbuhan yang bernafas dengan Stomata', $flower->get());
    }
}
