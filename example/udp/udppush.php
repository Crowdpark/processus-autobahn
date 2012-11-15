<?php
/**
 * Created by IntelliJ IDEA.
 * User: hissterkiller
 * Date: 11/15/12
 * Time: 4:33 PM
 * To change this template use File | Settings | File Templates.
 */
require __DIR__ . "/../../vendor/autoload.php";

$faker = \Faker\Factory::create("en_US");

$fp = stream_socket_client("udp://127.0.0.1:1113", $errno, $errstr);
if (!$fp) {
    echo "ERROR: $errno - $errstr<br />\n";
} else {
    $jsonString = json_encode(
        array(
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
        )
    );

    $totalLoop = 1000;
    $startTime = microtime(true);

    for ($i = 0; $i <= $totalLoop; $i++) {
        fwrite($fp, $jsonString);
    }

    $endTime   = microtime(true);
    $totalTime = $endTime - $startTime;
    var_dump($totalTime);
    fclose($fp);

}