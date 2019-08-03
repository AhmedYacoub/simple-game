<?php

namespace App\Contracts;

interface GenerateInterface {
    public function config($type, $total, $min, $max);
    public function generate_integers();
    public function generate_strings();
    public function generate_mix();
}
