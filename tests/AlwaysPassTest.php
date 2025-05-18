<?php

declare(strict_types=1);

namespace Drupal\Tests\MyDrupal;

use PHPUnit\Framework\TestCase;

class AlwaysPassTest extends TestCase
{
    public function testAlwaysPasses(): void
    {
        $this->assertTrue(true);
    }
}
