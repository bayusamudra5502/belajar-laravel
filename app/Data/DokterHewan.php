<?php

namespace App\Data;

class DokterHewan
{
    public function __construct(
        public string $name,
        public int $exp,
    ){}

    public function say_hi() {
        return "Halo, saya $this->name dengan pengalaman $this->exp tahun";
    }
}
