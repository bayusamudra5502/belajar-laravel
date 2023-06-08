<?php

namespace App\Data;

class KandangKucing {
    public function __construct(
        public Kucing $peliharaan,
    ) {}

    public function kasih_makan(): string {
        return $this->peliharaan->bunyi();
    }
}
