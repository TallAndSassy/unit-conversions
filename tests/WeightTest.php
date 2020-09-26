<?php

namespace Tallandsassy\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Tallandsassy\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }


    public function test_it_can_go_from_kg_to_lbs_test()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();
        $this->assertEquals(220.4623, $lbs);
    }
}
