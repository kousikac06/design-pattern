<?php

namespace Tests\Feature;

use Tests\TestCase;

class BuilderTest extends TestCase
{
    public function testGetMakerInfo(): void
    {
        $this->getJson('/api/builder/ice-maker/info?has_cp=0')
            ->assertJson([
                'info' => '{"MXR":"Cuisinart","MTR":"Whynter","FB":"Cuisinart","VAL":"Cuisinart","CP":null}',
            ])
            ->assertSuccessful();

        $this->getJson('/api/builder/ice-maker/info?has_cp=1')
            ->assertJson([
                'info' => '{"MXR":"Breville","MTR":"KitchenAid","FB":"Breville","VAL":"Cuisinart","CP":"Breville"}',
            ])
            ->assertSuccessful();
    }

    public function testAmericaIceCreamInfoTypeIllegal(): void
    {
        $this->getJson('/api/builder/ice-maker/info')
            ->assertJson(['data' => 'The has_cp field is required.'])
            ->assertStatus(400);

        $this->getJson('/api/builder/ice-maker/info?has_cp=errorType')
            ->assertJson(['data' => 'The selected has_cp is invalid.'])
            ->assertStatus(400);
    }
}
