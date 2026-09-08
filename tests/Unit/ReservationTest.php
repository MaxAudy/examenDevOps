<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Services\Reservation;

class ReservationTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }



    public function test_calcul_prix_normal(): void
    {
        $reservation = new Reservation();

        $prix = $reservation->calculerPrix(3);

        $this->assertEquals(30, $prix);
    }


    public function test_calcul_prix_avec_exception(): void
    {
        $reservation = new Reservation();
        $this->expectException(\InvalidArgumentException::class);
        $prix = $reservation->calculerPrix(-1);
    }
}
