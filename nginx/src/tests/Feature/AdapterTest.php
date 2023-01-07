<?php

namespace Tests\Feature;

use Tests\TestCase;

class AdapterTest extends TestCase
{
    public function testCookMethodSaute(): void
    {
        $this->getJson('/api/adapter/cook-method/saute')
            ->assertJson([
                "action"         => "開始炒",
                "ingredients"    => "青菜",
                "is_dry_burning" => false,
            ])
            ->assertSuccessful();
    }

    public function testCookMethodBroil(): void
    {
        $this->getJson('/api/adapter/cook-method/broil')
            ->assertJson([
                "action"         => "開始燉(其他)",
                "ingredients"    => "豆腐(其他)",
                "is_dry_burning" => false,
            ])
            ->assertSuccessful();
    }
}
