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

    /**
     * @var \Processus\Autobahn\Interfaces\AuffahrtInterface
     */
    private $auffahrt;

    /**
     * @var \Processus\Autobahn\Interfaces\FahrbahnInterface
     */
    private $fahrbahn;

    /**
     * @param $auffahrt
     * @return Autobahn
     */
    public function setAuffahrt($auffahrt)
    {
        $this->auffahrt = $auffahrt;

        return $this;
    }

    /**
     * @return \Processus\Autobahn\Interfaces\AuffahrtInterface
     */
    public function getAuffahrt()
    {
        return $this->auffahrt;
    }

    /**
     * @param $fahrbahn
     * @return Autobahn
     */
    public function setFahrbahn($fahrbahn)
    {
        $this->fahrbahn = $fahrbahn;

        return $this;
    }

    /**
     * @return \Processus\Autobahn\Interfaces\FahrbahnInterface
     */
    public function getFahrbahn()
    {
        return $this->fahrbahn;
    }

    /**
     * @param Interfaces\VehicleInterface $vehicle
     */
    public function drive(\Processus\Autobahn\Interfaces\VehicleInterface $vehicle = null)
    {

        if ($vehicle) {
            $this->getFahrbahn()->setVehicle($vehicle)
                ->drive();
        }

    }

}
