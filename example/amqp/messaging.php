<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/18/12
 * Time: 12:10 PM
 * To change this template use File | Settings | File Templates.
 */

require "amqpconnection.php";

$channel  = new AMQPChannel($connection);
$exchange = new AMQPExchange($channel);

$exchange->setName('exchange1');
$exchange->setType('fanout');
$exchange->declare();

$queue = new AMQPQueue($channel);
$queue->setName(md5(uniqid("test:rabbitmq:", true)));
$queue->declare();

$startTime     = microtime(true);
$totalMessages = 19000;

for ($i = 0; $i <= $totalMessages; $i++) {
    $message = $exchange->publish('Custom Message (ts): ' . time(), 'key1');
}

echo "Messages Sent: " . $totalMessages . PHP_EOL;

$endTime  = microtime(true);
$execTime = $endTime - $startTime;
echo "Sending Time: " . $execTime . PHP_EOL;

if (!$message) {
    echo '=== End ===', PHP_EOL;
} else {
    echo 'Message sent!', PHP_EOL;
}