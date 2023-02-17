<?php

namespace Tests\Feature;

use Tests\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testAmericaIceCreamInfo(): void
    {
        $this->getJson('/api/template-method/drink?type=MilkGreenTea')
            ->assertJson([
                'data' => [
                    "Boil green tea",
                    "Add milk",
                    "Shaking",
                    "Pour into cup",
                ],
            ])
            ->assertSuccessful();

        $this->getJson('/api/template-method/drink?type=LemonBlackTea')
            ->assertJson([
                'data' => [
                    "Boil black tea",
                    "Add lemon",
                    "Shaking",
                    "Pour into cup",
                ],
            ])
            ->assertSuccessful();
    }

    public function testAmericaIceCreamInfoTypeIllegal(): void
    {
        $this->getJson('/api/template-method/drink')
            ->assertJson(['data' => 'The type field is required.'])
            ->assertStatus(400);

        $this->getJson('/api/template-method/drink?type=errorType')
            ->assertJson(['data' => 'The selected type is invalid.'])
            ->assertStatus(400);
    }
}
