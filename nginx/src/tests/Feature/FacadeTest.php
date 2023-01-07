<?php

namespace Tests\Feature;

use Tests\TestCase;

class FacadeTest extends TestCase
{
    public function testCookSoup(): void
    {
        $this->getJson('/api/facade/cooke-soup')
            ->assertJson([
                "放入 (切塊的削皮的白蘿菠) 進鍋中",
                "放入 (切塊的豆腐) 進鍋中",
                "放入 (切塊的鮭魚) 進鍋中",
                "放入 (味噌) 進鍋中",
                "加入 500 毫升的水",
                "打開瓦斯",
                "開火",
                "攪拌 10 秒",
                "盛出 5 碗",
            ])
            ->assertSuccessful();
    }

    public function testAfterCookClean(): void
    {
        $this->getJson('/api/facade/after-cooke-clean')
            ->assertJson([
                "關火",
                "關閉瓦斯",
                "刀具已清洗乾淨",
                "鍋子已清洗乾淨",
            ])
            ->assertSuccessful();
    }
}
