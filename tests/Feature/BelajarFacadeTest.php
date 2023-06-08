<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class BelajarFacadeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_facade(): void
    {
        $nim_1 = Config::get("identity.nim");
        $nim_2 = config("identity.nim");

        self::assertEquals($nim_1, $nim_2);
    }

    public function test_facade_mock(): void {
        Config::shouldReceive('get')
            ->with('identity.nim')
            ->andReturn(13520047);

        $nim = Config::get('identity.nim');
        self::assertEquals(13520047, $nim);
        self::assertTrue(true);
    }
}
