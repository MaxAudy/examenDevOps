<?php

namespace App\Services;

class Reservation
{
    public function calculerPrix2(int $heures): float
    {

        if ($heures < 0) {
            throw new \InvalidArgumentException;
        }

        return $heures * 10;
    }
}
