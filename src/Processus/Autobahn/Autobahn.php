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
     * @param Interfaces\AuffahrtInterface $auffahrt
     *
     * @return Autobahn
     */
    public function setAuffahrt(\Processus\Autobahn\Interfaces\AuffahrtInterface $auffahrt)
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
     * @param Interfaces\FahrbahnInterface $fahrbahn
     *
     * @return Autobahn
     */
    public function setFahrbahn(\Processus\Autobahn\Interfaces\FahrbahnInterface $fahrbahn)
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
     * @param array $data
     *
     * @throws \Exception
     */
    public function drive(array $data)
    {

        if ($data && is_array($data)) {
            $vehilce = new \Processus\Autobahn\Base\BaseVehicle($data);
            $this->getFahrbahn()->setVehicle($vehilce);
            $this->push();
        } else {
            throw new \Exception("Data are not set or not in form!");
        }

    }

    protected function push()
    {

    }
}
