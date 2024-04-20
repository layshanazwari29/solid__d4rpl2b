<?php

require_once 'tipepembayaran.php';

class Kredit implements TipePembayaran
{
    public function memprosesPembayaran(): void
    {
        echo "Pembayaran dengan metode Kredit diproses.\n";
    }
}