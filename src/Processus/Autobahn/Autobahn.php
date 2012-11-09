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
     * @param \Processus\Autobahn\Interfaces\AuffahrtInterface $auffahrt
     */
    public function setAuffahrt($auffahrt)
    {
        $this->auffahrt = $auffahrt;
    }

    /**
     * @return \Processus\Autobahn\Interfaces\AuffahrtInterface
     */
    public function getAuffahrt()
    {
        return $this->auffahrt;
    }

    /**
     * @param \Processus\Autobahn\Interfaces\FahrbahnInterface $fahrbahn
     */
    public function setFahrbahn($fahrbahn)
    {
        $this->fahrbahn = $fahrbahn;
    }

    /**
     * @return \Processus\Autobahn\Interfaces\FahrbahnInterface
     */
    public function getFahrbahn()
    {
        return $this->fahrbahn;
    }

    /**
     * @var \Processus\Autobahn\Interfaces\FahrbahnInterface
     */
    private $fahrbahn;

}
