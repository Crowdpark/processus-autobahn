<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/19/12
 * Time: 12:15 PM
 * To change this template use File | Settings | File Templates.
 */
$context = new ZMQContext();
$socket  = new ZMQSocket($context, ZMQ::SOCKET_PULL);
$socket->bind("tcp://*:5555");
$totalMessage = 0;
while (true) {

    sleep(1);

    try {

        $message = $socket->recv(ZMQ::MODE_NOBLOCK);

        if (empty($message)) {
            continue;
        }

        $totalMessage++;
        echo $totalMessage++ . PHP_EOL;

    } catch (\Exception $error) {
        var_dump($error);
    }
}