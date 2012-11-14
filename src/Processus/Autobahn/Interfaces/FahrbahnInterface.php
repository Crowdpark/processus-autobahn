<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/22/12
 * Time: 1:20 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Autobahn\Interfaces;
interface FahrbahnInterface
{

    /**
     * @param AuffahrtInterface $auffahrt
     * @return FahrbahnInterface
     */
    public function setAuffahrt(AuffahrtInterface $auffahrt);

    /**
     * @return mixed
     */
    public function getAuffahrt();

    /**
     * @param VehicleInterface $vehicle
     * @return FahrbahnInterface
     */
    public function setVehicle(VehicleInterface $vehicle);
}
