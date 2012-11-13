<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/18/12
 * Time: 11:25 AM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Autobahn\Spur\ZeroMq;

class Auffahrt implements \Processus\Autobahn\Interfaces\AuffahrtInterface
{

    private $host;

    private $port;

    private $connected;

    private $type;

    /**
     * @param string $host
     * @return mixed|Auffahrt
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * @return \string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $port
     * @return mixed|Auffahrt
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param string $username
     * @param string $password
     * @return mixed|void
     * @throws \Processus\Spl\Exceptions\FunctionNotImplementedException
     */
    public function setCredentials(\string $username, \string $password)
    {
        throw new \Processus\Spl\Exceptions\FunctionNotImplementedException();
    }

    /**
     * @return string|void
     * @throws \Processus\Spl\Exceptions\FunctionNotImplementedException
     */
    public function getUsername()
    {
        throw new \Processus\Spl\Exceptions\FunctionNotImplementedException();
    }

    /**
     * @param string $username
     * @return mixed|void
     * @throws \Processus\Spl\Exceptions\FunctionNotImplementedException
     */
    public function setUsername(\string $username)
    {
        throw new \Processus\Spl\Exceptions\FunctionNotImplementedException();
    }

    /**
     * @param string $password
     * @return mixed|void
     * @throws \Processus\Spl\Exceptions\FunctionNotImplementedException
     */
    public function setPassword(\string $password)
    {
        throw new \Processus\Spl\Exceptions\FunctionNotImplementedException();
    }

    /**
     * @return mixed|void
     * @throws \Processus\Spl\Exceptions\FunctionNotImplementedException
     */
    public function getPassword()
    {
        throw new \Processus\Spl\Exceptions\FunctionNotImplementedException();
    }

    /**
     * @return mixed|void
     * @throws \Processus\Spl\Exceptions\FunctionNotImplementedException
     */
    public function getCredentials()
    {
        throw new \Processus\Spl\Exceptions\FunctionNotImplementedException();
    }

    /**
     * @return mixed|Auffahrt
     */
    public function connect()
    {
        $this->connected = true;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isConnected()
    {
        return $this->connected;
    }

    /**
     * @param $type
     * @return mixed|Auffahrt
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}