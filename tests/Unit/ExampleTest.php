<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        for ($i=0;$i<=99;$i++) {
            $this->assertEquals(["1400",$i,$i],dateExplode("1400/".$i."/".$i));
        }
    }
}
