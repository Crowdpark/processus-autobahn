<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/19/12
 * Time: 12:18 PM
 * To change this template use File | Settings | File Templates.
 */

require __DIR__ . "/../../vendor/autoload.php";

echo "=== ZMQ Socket Start===" . PHP_EOL;
$startTime = microtime(true) . PHP_EOL;

$context = new ZMQContext();
$queue   = new ZMQSocket($context, ZMQ::SOCKET_PUSH, "MySock1");
$queue->connect("tcp://127.0.0.1:5555");

$endTime  = microtime(true);
$execTime = $endTime - $startTime;
echo "Connection time: " . $execTime . PHP_EOL;

echo "=== ZMQ Socket Connected===" . PHP_EOL;

$startTime     = microtime(true);
$totalMessages = 1000;

$faker = \Faker\Factory::create("en_US");

for ($i = 0; $i <= $totalMessages; $i++) {

    $mqData = array(
        "id"       => 1,
        "params"   => array(
            array(
                "message"  => "This is bullshit to.",
                "created"  => time(),
                "someData" => mt_rand(0, 49344409875093475),
                "user"     => array(
                    "firstname" => $faker->firstName,
                    "lastname"  => $faker->lastName,
                    "name"      => $faker->name,
                    "address"   => $faker->address,
                    "bio"       => $faker->text,
                    "email"     => $faker->safeEmail
                ),
            )
        ),
        "method"   => "ZeroMq.TestZeroMq.testEcho",
        "extended" => array(),
    );

    $jsonString = json_encode($mqData);
    $queue->send($jsonString, ZMQ::MODE_NOBLOCK);
}
$endTime  = microtime(true);
$execTime = $endTime - $startTime;
echo "Sending Time: " . $execTime . PHP_EOL;
echo "Total Items sending: " . $totalMessages . PHP_EOL;
echo "=== ZMQ Socket End===" . PHP_EOL;