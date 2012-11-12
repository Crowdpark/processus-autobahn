<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/18/12
 * Time: 11:25 AM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Spur\ZeroMq;
class Auffahrt implements \Processus\Autobahn\Interfaces\AuffahrtInterface
{

    private $host;
    private $port;

    /**
     * @param string $host
     * @return mixed|Auffahrt
     */
    public function setHost(\string $host)
    {
        // TODO: Implement setHost() method.
        return $this;
    }

    /**
     * @return \string
     */
    public function getHost()
    {
        // TODO: Implement getHost() method.
    }

    /**
     * @param string $port
     * @return mixed|Auffahrt
     */
    public function setPort(\string $port)
    {
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        // TODO: Implement getPort() method.
    }

    /**
     * @param \string $username
     * @param \string $password
     * @return mixed
     */
    public function setCredentials(\string $username, \string $password)
    {
        // TODO: Implement setCredentials() method.
        return $this;
    }

    /**
     * @return \string
     */
    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    /**
     * @param \string $username
     * @return mixed
     */
    public function setUsername(\string $username)
    {
        // TODO: Implement setUsername() method.
    }

    /**
     * @param string $password
     * @return mixed|Auffahrt
     */
    public function setPassword(\string $password)
    {
        return $this;
    }

    /**
     * @return mixed
     */
    function getPassword()
    {
        // TODO: Implement getPassword() method.
    }

    /**
     * @return mixed
     */
    public function getCredentials()
    {
        // TODO: Implement getCredentials() method.
    }

    /**
     * @param string $host
     * @param string $port
     * @param string $username
     * @param string $password
     * @return mixed
     */
    public function connect($host = "127.0.0.1", $port = "5555", $username = "root", $password = "root")
    {
        $this->connected = true;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isConnected()
    {
        // TODO: Implement isConnected() method.
    }
}
