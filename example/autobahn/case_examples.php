<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 11/10/12
 * Time: 1:58 PM
 * To change this template use File | Settings | File Templates.
 */
require __DIR__ . "/../../vendor/autoload.php";

$auffahrt = new \Processus\Autobahn\Spur\ZeroMq\Auffahrt();
$auffahrt->setPort(5555)
    ->setHost("127.0.0.1")
    ->connect();

$fahrbahn = new \Processus\Autobahn\Spur\ZeroMq\Fahrbahn();
$fahrbahn->setAuffahrt($auffahrt)
    ->setVehicle(new \Processus\Autobahn\Base\BaseVehicle());

$autobahn = new \Processus\Autobahn\Autobahn();
$autobahn->setAuffahrt($auffahrt)
    ->setFahrbahn($fahrbahn)
    ->drive(array("firstname" => "Francis", "lastname" => "Varga"));