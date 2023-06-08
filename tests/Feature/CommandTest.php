<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * Dokumentasi: https://laravel.com/docs/10.x/console-tests
 */
class CommandTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->artisan('hai');
        $response->expectsOutput("Hi...");
    }
}
