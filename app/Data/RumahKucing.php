<?php

namespace App\Data;

class RumahKucing {
    public function __construct(
        public Kucing $animal
    ) {}

    public function take(): string {
        return $this->animal->bunyi();
    }
}
