<?php

require_once 'Mobil.php';
require_once 'MobilListrik.php';

// Create instances of Mobil and MobilListrik
$mobil = new Mobil();
$mobilListrik = new MobilListrik();

// Use Mobil
echo "Mobil Actions:\n";
$mobil->menggunakanBBM();

// Use MobilListrik
echo "\nMobil Listrik Actions:\n";
$mobilListrik->menggunakanBaterai();

?>
