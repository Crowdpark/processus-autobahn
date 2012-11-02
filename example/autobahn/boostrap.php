<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/22/12
 * Time: 1:51 PM
 * To change this template use File | Settings | File Templates.
 */

$sourceFolder = '../../src/Processus/Autobahn/';

require $sourceFolder . 'Autobahn.php';
require $sourceFolder . 'Interfaces/AuffahrtInterface.php';
require $sourceFolder . 'Interfaces/AutoInterface.php';
require $sourceFolder . 'Interfaces/FahrbahnInterface.php';
require $sourceFolder . 'Spur/Amqp/Auffahrt.php';
require $sourceFolder . 'Spur/Amqp/Fahrbahn.php';
require $sourceFolder . 'Spur/ZeroMq/Auffahrt.php';
require $sourceFolder . 'Spur/ZeroMq/Fahrbahn.php';