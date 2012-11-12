<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/18/12
 * Time: 11:30 AM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Spur\ZeroMq;
class Fahrbahn implements \Processus\Autobahn\Interfaces\FahrbahnInterface
{

    /**
     * @param \Processus\Autobahn\Interfaces\AuffahrtInterface $auffahrt
     * @return \Processus\Autobahn\Interfaces\FahrbahnInterface|void
     */
    public function setAuffahrt(\Processus\Autobahn\Interfaces\AuffahrtInterface $auffahrt)
    {
        // TODO: Implement setAuffahrt() method.
    }

    /**
     * @return mixed
     */
    public function getAuffahrt()
    {
        // TODO: Implement getAuffahrt() method.
    }

    /**
     * @param \Processus\Autobahn\Interfaces\VehicleInterface $vehicle
     * @return \Processus\Autobahn\Autobahn|void
     */
    public function setVehicle(\Processus\Autobahn\Interfaces\VehicleInterface $vehicle)
    {

    }
}
