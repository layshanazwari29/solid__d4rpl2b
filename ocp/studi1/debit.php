<?php

require_once 'tipepembayaran.php';

class Debit implements TipePembayaran
{
    public function memprosesPembayaran(): void
    {
        echo "Pembayaran dengan metode Debit diproses.\n";
    }
}