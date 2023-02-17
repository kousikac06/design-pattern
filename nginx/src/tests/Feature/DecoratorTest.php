<?php

namespace Tests\Feature;

use Tests\TestCase;

class DecoratorTest extends TestCase
{
    public function testIceCreamTotalPrice(): void
    {
        $this->getJson('/api/decorator/ice-cream/price')
            ->assertJson(['total_price' => 100])
            ->assertSuccessful();
    }
}
