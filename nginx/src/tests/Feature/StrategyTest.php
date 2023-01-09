<?php

namespace Tests\Feature;

use Tests\TestCase;

class StrategyTest extends TestCase
{
    public function testAmericaIceCreamInfo(): void
    {
        $this->getJson('/api/strategy/ice-cream/info?type=AmericaIceCream')
            ->assertJson(['data' => '乳脂肪含量大於8%'])
            ->assertSuccessful();

        $this->getJson('/api/strategy/ice-cream/info?type=SoftServedIceCream')
            ->assertJson(['data' => '乳脂肪含量3～6%'])
            ->assertSuccessful();

        $this->getJson('/api/strategy/ice-cream/info?type=Gelato')
            ->assertJson(['data' => '乳脂肪含量低於8%'])
            ->assertSuccessful();
    }

    public function testAmericaIceCreamInfoTypeIllegal(): void
    {
        $this->getJson('/api/strategy/ice-cream/info')
            ->assertJson(['data' => 'The type field is required.'])
            ->assertStatus(400);

        $this->getJson('/api/strategy/ice-cream/info?type=errorType')
            ->assertJson(['data' => 'The selected type is invalid.'])
            ->assertStatus(400);
    }
}
