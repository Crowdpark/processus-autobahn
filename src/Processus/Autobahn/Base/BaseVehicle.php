<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 11/11/12
 * Time: 6:26 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Autobahn\Base;

class BaseVehicle extends \Processus\Spl\Base\BaseVo implements \Processus\Autobahn\Interfaces\VehicleInterface
{
    public function __construct($rawData = null)
    {
        if (isset($rawData)) {
            $this->setData($rawData);
        }

    }
}
