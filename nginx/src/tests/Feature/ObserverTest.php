<?php

namespace Tests\Feature;

use Tests\TestCase;

class ObserverTest extends TestCase
{
    public function testAmericaIceCreamInfo(): void
    {
        $this->getJson('/api/observer/notify')
            ->assertJson([
                'data' => [
                    '好開心，又出新品了！',
                    '可惡，又出新品來跟我們搶生意！',
                ],
            ])
            ->assertSuccessful();
    }
}
