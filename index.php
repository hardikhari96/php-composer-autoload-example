<?php
//composer dump-autoload

require dirname(__FILE__).'/vendor/autoload.php';

use Hari\bikes;
use Hari\cars;
use Hari\database;

//echo cars::maruti();
$conn = new database;
print_r($conn->connection());