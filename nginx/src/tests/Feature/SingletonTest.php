<?php

namespace Tests\Feature;

use Tests\TestCase;

class SingletonTest extends TestCase
{
    public function testIceCreamCount(): void
    {
        $this->getJson('/api/singleton/count')
            ->assertJson([
                'count' => 80,
            ])
            ->assertSuccessful();
    }

    public function testIceCreamCountByProvider(): void
    {
        $this->getJson('/api/singleton/count-by-provider')
            ->assertJson([
                'count' => 80,
            ])
            ->assertSuccessful();
    }
}
