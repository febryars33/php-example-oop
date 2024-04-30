<?php

declare(strict_types=1);

use Febryars33\LivingThings\Class\Animal\Cow;
use PHPUnit\Framework\TestCase;

final class CowTest extends TestCase
{
    public function testOutput(): void
    {
        $cow = new Cow;

        $this->assertSame('Sapi adalah Hewan yang bernafas dengan Paru - Paru dan berjalan dengan Kaki', $cow->get());
    }
}
