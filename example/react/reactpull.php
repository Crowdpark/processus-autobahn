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

$pull = $context->getSocket(ZMQ::SOCKET_PULL);
$pull->bind('tcp://127.0.0.1:5555');

$pull->on('error', function ($e)
{
    var_dump($e->getMessage());
});

$pull->on('message', function ($msg)
{
    echo $msg . PHP_EOL;
});

$loop->run();