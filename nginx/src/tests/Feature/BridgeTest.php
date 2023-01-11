<?php

namespace Tests\Feature;

use Tests\TestCase;

class BridgeTest extends TestCase
{
    public function iceCreamInfoByBrand(): void
    {
        //因所有品牌用的乳脂資訊實做是一樣的，故只要測試 M 種品牌實做，再選任意品牌的 N 種乳脂資訊實做測試
        $this->getJson('/api/bridge/ice-cream/info?brand=A&type=AmericaIceCream')
            ->assertJson(['data' => '乳脂肪含量大於8% - brandA'])
            ->assertSuccessful();

        $this->getJson('/api/bridge/ice-cream/info?brand=B&type=AmericaIceCream')
            ->assertJson(['data' => '乳脂肪含量大於8% - brandB'])
            ->assertSuccessful();

        $this->getJson('/api/bridge/ice-cream/info?brand=A&type=SoftServedIceCream')
            ->assertJson(['data' => '乳脂肪含量3～6% - brandA'])
            ->assertSuccessful();

        $this->getJson('/api/bridge/ice-cream/info?brand=A&type=Gelato')
            ->assertJson(['data' => '乳脂肪含量低於8% - brandA'])
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
