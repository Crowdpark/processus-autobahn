<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/19/12
 * Time: 12:15 PM
 * To change this template use File | Settings | File Templates.
 */
$socket = new \ZMQSocket(new \ZMQContext(), \ZMQ::SOCKET_PULL);
$socket->bind("tcp://*:5555");

while (TRUE) {

    usleep(500);

    try {

        $message = $socket->recv(\ZMQ::MODE_NOBLOCK);

        if (empty($message)) {
            continue;
        }

        var_dump($message);

    } catch (\Exception $error) {
        var_dump($error);
    }
}