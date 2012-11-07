<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/19/12
 * Time: 12:18 PM
 * To change this template use File | Settings | File Templates.
 */

echo "=== ZMQ Socket Start===" . PHP_EOL;
$startTime = microtime(true) . PHP_EOL;

$queue = new \ZMQSocket(new \ZMQContext(), \ZMQ::SOCKET_PUSH, "MySock1");
$queue->connect("tcp://192.168.42.179:5555");

$endTime = microtime(true);
$execTime = $endTime - $startTime;
echo "Connection time: " . $execTime . PHP_EOL;

echo "=== ZMQ Socket Connected===" . PHP_EOL;

$startTime = microtime(true);
$totalMessages = 190000;
for ($i = 0; $i <= $totalMessages; $i++) {

    $mqData = array(
        "id" => 1,
        "params" => array(array(
            "message" => "This is bullshit to.",
            "created" => time(),
            "someData" => mt_rand(0, 49344409875093475),
        )),
        "method" => "ZeroMq.TestZeroMq.testEcho",
        "extended" => array(),
    );

    $queue->send(json_encode($mqData), \ZMQ::MODE_NOBLOCK);
}
$endTime = microtime(true);
$execTime = $endTime - $startTime;
echo "Sending Time: " . $execTime . PHP_EOL;
echo "Total Items sending: " . $totalMessages . PHP_EOL;
echo "=== ZMQ Socket End===" . PHP_EOL;