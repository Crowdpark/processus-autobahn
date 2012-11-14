<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/18/12
 * Time: 11:30 AM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Autobahn\Spur\ZeroMq;

class Fahrbahn implements \Processus\Autobahn\Interfaces\FahrbahnInterface
{

    /**
     * @var \Processus\Autobahn\Interfaces\AuffahrtInterface
     */
    private $auffahrt;

    /**
     * @var \Processus\Autobahn\Interfaces\VehicleInterface
     */
    private $vehicle;

    /**
     * @param \Processus\Autobahn\Interfaces\AuffahrtInterface $auffahrt
     *
     * @return \Processus\Autobahn\Interfaces\FahrbahnInterface|void
     */
    public function setAuffahrt(\Processus\Autobahn\Interfaces\AuffahrtInterface $auffahrt)
    {
        $this->auffahrt = $auffahrt;

        return $this;
    }

    /**
     * @return mixed|\Processus\Autobahn\Interfaces\AuffahrtInterface
     */
    public function getAuffahrt()
    {
        return $this->auffahrt;
    }

    /**
     * @param \Processus\Autobahn\Interfaces\VehicleInterface $vehicle
     *
     * @return \Processus\Autobahn\Autobahn|void
     */
    public function setVehicle(\Processus\Autobahn\Interfaces\VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * @param \Processus\Autobahn\Interfaces\VehicleInterface $vehicle
     */
    public function push(\Processus\Autobahn\Interfaces\VehicleInterface $vehicle = null)
    {
        if ($vehicle) {
            $this->vehicle = $vehicle;
        }


    }
}
