<?php

namespace Tests\Feature;

use App\Data\Hewan;
use App\Data\KandangKucing;
use App\Data\Kucing;
use Illuminate\Contracts\Foundation\Application;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Tests\TestCase;

class BelajarContainerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_kucing_container(): void {
        $kucing = $this->app->get(Kucing::class);
        self::assertEquals("Meong", $kucing->bunyi());
    }

    /**
     * @throws NotFoundExceptionInterface
     * @throws ContainerExceptionInterface
     */
    public function test_kucing_singleton(): void {
        $cat1 = $this->app->get(Kucing::class);
        $cat2 = $this->app->get(Kucing::class);

        // Ini dia bikin 2 objek beda
        self::assertTrue($cat1 !== $cat2);

        $this->app->singleton(Kucing::class);
        $cat1 = $this->app->get(Kucing::class);
        $cat2 = $this->app->get(Kucing::class);

        // Klo ini dia jadi sama
        self::assertTrue($cat1 === $cat2);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function test_kucing_instance(): void {
        $cat = new Kucing;
        $this->app->instance(Kucing::class, $cat);

        $cat1 = $this->app->get(Kucing::class);
        $cat2 = $this->app->get(Kucing::class);

        self::assertTrue($cat === $cat1);
        self::assertTrue($cat === $cat2);
        self::assertTrue($cat1 === $cat2);
    }

    public function test_buat_kandang(): void {
        $kandang = $this->app->get(KandangKucing::class);
        self::assertEquals("Meong", $kandang->kasih_makan());
    }

    public function test_buat_kandang_singleton(): void {
        $this->app->singleton(KandangKucing::class, function (Application $app) {
            return new KandangKucing($app->get(Kucing::class));
        });

        $kandang = $this->app->get(KandangKucing::class);
        self::assertEquals("Meong", $kandang->kasih_makan());
    }

    public function test_hewan(): void {
        $this->app->bind(Hewan::class, Kucing::class);

        $cat1 = $this->app->get(Hewan::class);
        $cat2 = $this->app->get(Hewan::class);

        // Ini dia bikin 2 objek beda
        self::assertTrue($cat1 !== $cat2);
    }

    public function test_hewan_singleton(): void {
        $this->app->singleton(Hewan::class, Kucing::class);

        $cat1 = $this->app->get(Hewan::class);
        $cat2 = $this->app->get(Hewan::class);

        // Ini dia bikin 2 objek beda
        self::assertTrue($cat1 === $cat2);
    }
}
