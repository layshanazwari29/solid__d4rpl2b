<?php

require_once 'Lampu.php';
require_once 'KipasAngin.php';
require_once 'Saklar.php';

$lampu = new Lampu();
$kipasAngin = new KipasAngin();

$saklarLampu = new Saklar($lampu);
$saklarKipasAngin = new Saklar($kipasAngin);

$saklarLampu->berubah();
echo '<br/>';
$saklarKipasAngin->berubah();
echo '<br/>';
$saklarKipasAngin->berubah();

?>
