<?php

require_once 'tipepembayaran.php';

class Cash implements TipePembayaran
{
    public function memprosesPembayaran(): void
    {
        echo "Pembayaran dengan metode Tunai diproses.\n";
    }
}