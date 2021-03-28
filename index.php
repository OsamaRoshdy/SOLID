<?php

use \SOLID\SRP\Bus;
use \SOLID\SRP\Driver;
use \SOLID\SRP\Route;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$driver = new Driver('OSama', '23', '546199','Cairo');
$route = new Route('Helwan', 'October', 'Test');
$bus = new Bus('red', '2', '120', '50',$driver, $route);

echo '<per>';
    var_dump($bus);
echo '</per>';