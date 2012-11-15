<?php
/**
 * Created by IntelliJ IDEA.
 * User: hissterkiller
 * Date: 11/15/12
 * Time: 1:32 PM
 * To change this template use File | Settings | File Templates.
 */

require __DIR__ . "/../../vendor/autoload.php";

$loop = React\EventLoop\Factory::create();

$context = new React\ZMQ\Context($loop);

$push = $context->getSocket(ZMQ::SOCKET_PUSH);
$push->connect('tcp://127.0.0.1:5555');

$i = 0;
$loop->addPeriodicTimer(1, function () use (&$i, $push)
{
    $i++;
    $faker = \Faker\Factory::create("en_US");
    $mqData = array(
        "id"       => 1,
        "params"   => array(array(
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
        )),
        "method"   => "ZeroMq.TestZeroMq.testEcho",
        "extended" => array(),
    );
    $push->send(json_encode($mqData));
});

$loop->run();