<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    /** @test */
    public function check_if_config_columns_is_correct()
    {
        $config = new \App\Models\Config();
        $this->assertEquals(['name', 'value', 'status', 'seila'], $config->getFillable());
    }
}
