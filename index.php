<?php

/*
 * S.O.L.I.D
 *
 * S = Single Responsibility
 * O = Open Closed ( Open for extension but closed for modification)
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use \SOLID\OCP\Bus;
use \SOLID\OCP\Car;
use \SOLID\OCP\Driver;
use \SOLID\OCP\Route;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
$driver = new Driver('OSama', '23', '546199','Cairo');
$route1 = new Route('Helwan', 'October', 'Test');
$route2 = new Route('test', 'test', 'Test');
$bus = new Bus();
$bus->setDriver($driver);
$bus->setMaxSpeed(120);
$bus->setColor('red');
$bus->addRoute([$route1, $route2]);

$car = new Car();
$car->setColor('black');
$car->setDriver($driver);
$car->addRoute($route1);

$trip = new \SOLID\OCP\Trip($car, 'test', 50, 50);
//var_dump($trip);
echo '<pre>' , print_r($trip, 1) , '</pre>';