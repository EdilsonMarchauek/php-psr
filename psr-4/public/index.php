<?php

require_once '../vendor/autoload.php';

use App\Controllers\HomeController as Home;
use ETI\DB\Database as Db;

$home = new Home;
echo $home->index();

$database = new Db;
var_dump($database->getConn());
