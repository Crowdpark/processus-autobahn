<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/18/12
 * Time: 1:06 PM
 * To change this template use File | Settings | File Templates.
 */

echo "=== Start ===" . PHP_EOL;
$startTime = microtime(true) . PHP_EOL;

$connection = new AMQPConnection(array(
    'host'     => '192.168.42.179',
    'vhost'    => 'railgun',
    'port'     => 5672,
    'login'    => 'guest',
    'password' => 'guest'
));
$connection->connect();
$endTime  = microtime(true);
$execTime = $endTime - $startTime;
echo "Connection time: " . $execTime . PHP_EOL;

if (!$connection->isConnected()) {
    echo "Cannot connect to the broker";
}