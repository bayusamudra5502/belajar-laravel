<?php

namespace App\Data;

class TamanBermain
{
    public function __construct(
        private string $name,
    ){}

    public function get_name() {
        return $this->name;
    }
}
