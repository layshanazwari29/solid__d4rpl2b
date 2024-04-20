<?php

require_once 'Kubus.php';
require_once 'Persegi.php';

$kubus = new Kubus();
$persegi = new Persegi();

// Use Kubus
echo "Kubus Actions:\n";
$kubus->calculateVolume();
$kubus->calculateArea();

echo '<br/>';

// Use Persegi
echo "\nPersegi Actions:\n";
$persegi->calculateArea();

?>
