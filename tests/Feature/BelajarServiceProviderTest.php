<?php

namespace Tests\Feature;

use App\Data\DokterHewan;
use App\Data\RumahHewan;
use App\Data\TamanBermain;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BelajarServiceProviderTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_dokter(): void
    {
        $dokter = $this->app->make(DokterHewan::class);
        self::assertNotNull($dokter);
        self::assertEquals("Halo, saya Fulan bin Fulan dengan pengalaman 10 tahun" ,$dokter->say_hi());
    }

    public function test_rumah_hewan(): void {
        $rumah = $this->app->get(RumahHewan::class);
        self::assertNotNull($rumah);
        self::assertEquals("Meong", $rumah->take());
    }

    public function test_service_provider(): void {
        $taman = $this->app->make(TamanBermain::class);
        self::assertNotNull($taman);
        self::assertEquals("Taman Kucing", $taman->get_name());
    }
}
