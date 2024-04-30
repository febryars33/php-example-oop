<?php

declare(strict_types=1);

use Febryars33\LivingThings\Class\Animal\Fish;
use PHPUnit\Framework\TestCase;

final class FishTest extends TestCase
{
    public function testOutput(): void
    {
        $fish = new Fish;

        $this->assertSame('Ikan adalah hewan yang bernafas dengan Insang dan berjalan dengan Sirip', $fish->get());
    }
}
