<?php

namespace App\Traits;

trait PriceFormatTrait
{
    // Metode untuk mengubah format price dari $ menjadi Rp.
    public function formatPrice($price, $prefix = 'Rp. ')
    {
        return $prefix . number_format($price, 0, ',', '.');
    }
}