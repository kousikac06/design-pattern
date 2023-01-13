<?php

namespace Tests\Feature;

use Tests\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testAmericaIceCreamInfo(): void
    {
        $this->getJson('/api/abstract-factory/ice-cream/info?type=AmericaIceCream')
            ->assertJson([
                'data' => [
                    'butterfat' => '乳脂肪含量大於8%',
                    'calorie'   => 180,
                ],
            ])
            ->assertSuccessful();

        $this->getJson('/api/abstract-factory/ice-cream/info?type=SoftServedIceCream')
            ->assertJson([
                'data' => [
                    'butterfat' => '乳脂肪含量3～6%',
                    'calorie'   => 150,
                ],
            ])
            ->assertSuccessful();

        $this->getJson('/api/abstract-factory/ice-cream/info?type=Gelato')
            ->assertJson([
                'data' => [
                    'butterfat' => '乳脂肪含量低於8%',
                    'calorie'   => 120,
                ],
            ])
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
