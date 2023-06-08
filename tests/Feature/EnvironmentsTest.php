<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\App;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Tests\TestCase;

class EnvironmentsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_environment_variable(): void
    {
        $app_name = env("APP_NAME");
        self::assertEquals("BelajarLaravel", $app_name);
    }

    public function test_app_run_environment() {
        $env = App::environment();
        self::assertEquals("development", $env);
        self::assertFalse(App::environment(["testing"]));
        self::assertTrue(App::environment(["production","development"]));

        echo "Mbeek";
        self::expectOutputString("Mbeek");
    }

    public function test_configuration() {
        $fist_name = config("identity.author.first_name");
        $middle_name_nd = config("identity.author.middle_name");
        $middle_name = config("identity.author.middle_name", "None");

        self::assertEquals("Bayu", $fist_name);
        self::assertNull($middle_name_nd);
        self::assertEquals("None", $middle_name);
    }
}
