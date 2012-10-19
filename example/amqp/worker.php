<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/18/12
 * Time: 1:06 PM
 * To change this template use File | Settings | File Templates.
 */

require "amqpconnection.php";

// Open channel
$channel = new AMQPChannel($connection);

// Open Queue and bind to exchange
$queue = new AMQPQueue($channel);
$queue->setName('queue1');
$queue->bind('exchange1', 'key1');
$queue->declare();

while (true) {
    if($envelope = $queue->get(AMQP_AUTOACK))
    {
        echo ($envelope->isRedelivery()) ? 'Redelivery' : 'New Message';
        echo PHP_EOL;
        echo $envelope->getBody(), PHP_EOL;
    }
    else
    {
        continue;
    }
}



