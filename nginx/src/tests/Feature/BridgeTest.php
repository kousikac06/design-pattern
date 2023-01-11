<?php

namespace Tests\Feature;

use Tests\TestCase;

class BridgeTest extends TestCase
{
    public function iceCreamInfoByBrand(): void
    {
        $this->getJson('/api/bridge/ice-cream/info?brand=A&type=AmericaIceCream')
            ->assertJson(['data' => '乳脂肪含量大於8% - brandA'])
            ->assertSuccessful();

        $this->getJson('/api/bridge/ice-cream/info?brand=A&type=SoftServedIceCream')
            ->assertJson(['data' => '乳脂肪含量3～6% - brandA'])
            ->assertSuccessful();

        $this->getJson('/api/bridge/ice-cream/info?brand=A&type=Gelato')
            ->assertJson(['data' => '乳脂肪含量低於8% - brandA'])
            ->assertSuccessful();

        $this->getJson('/api/bridge/ice-cream/info?brand=B&type=AmericaIceCream')
            ->assertJson(['data' => '乳脂肪含量大於8% - brandB'])
            ->assertSuccessful();

        $this->getJson('/api/bridge/ice-cream/info?brand=B&type=SoftServedIceCream')
            ->assertJson(['data' => '乳脂肪含量3～6% - brandB'])
            ->assertSuccessful();

        $this->getJson('/api/bridge/ice-cream/info?brand=B&type=Gelato')
            ->assertJson(['data' => '乳脂肪含量低於8% - brandB'])
            ->assertSuccessful();
    }

    public function testIceCreamInfoByBrandParameterIllegal(): void
    {
        $this->getJson('/api/bridge/ice-cream/info')
            ->assertJson(['data' => 'The type field is required.'])
            ->assertStatus(400);

        $this->getJson('/api/bridge/ice-cream/info?type=errorType')
            ->assertJson(['data' => 'The selected type is invalid.'])
            ->assertStatus(400);

        $this->getJson('/api/bridge/ice-cream/info?type=Gelato')
            ->assertJson(['data' => 'The brand field is required.'])
            ->assertStatus(400);

        $this->getJson('/api/bridge/ice-cream/info?type=Gelato&brand=errorBrand')
            ->assertJson(['data' => 'The selected brand is invalid.'])
            ->assertStatus(400);
    }
}
