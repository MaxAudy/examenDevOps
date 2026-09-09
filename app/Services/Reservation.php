<?php

namespace App\Services;

class Reservation
{
    public function calculerPrix(int $heures): float
    {

        if ($heures < 0) {
            throw new \InvalidArgumentException;
        }

        return $heures * 10;
    }
}
