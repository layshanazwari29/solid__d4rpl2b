<?php

require_once 'mahasiswa.php';
require_once 'mahasiswaview.php';

$mahasiswa = new Mahasiswa("2205045", "Laysha Nazwari Iklies Putri");

$view = new MahasiswaView();

$view->showMahasiswa($mahasiswa);