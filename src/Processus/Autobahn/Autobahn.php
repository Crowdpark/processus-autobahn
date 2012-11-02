<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/18/12
 * Time: 11:21 AM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Autobahn;
class Autobahn
{
    public function amqpAuffahrt()
    {
        $auffahrt = new \Processus\Spur\Amqp\Auffahrt();
        $auffahrt->connect("192.168.42.179", null, null);
    }
}
