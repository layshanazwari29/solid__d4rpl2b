<?php

require_once 'dbmsconnection.php';
require_once 'mysql.php';
require_once 'mongodb.php';

$dbmsConnection = new DBMSConnection();

$mysql = new MySQL();
$mongodb = new MongoDB();

$dbmsConnection->connect($mysql);

$dbmsConnection->connect($mongodb);
