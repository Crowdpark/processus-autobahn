<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/18/12
 * Time: 11:25 AM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Spur\ZeroMq;
class Auffahrt
{

    /**
     * @var \AMQPConnection
     */
    private $_connection;

    /**
     * @var \string
     */
    private $_login;

    /**
     * @var \string
     */
    private $_password;

    /**
     * @var \string
     */
    private $_port;

    /**
     * @var \string
     */
    private $_vhost;

    /**
     * @param string $vhost
     */
    public function setVhost($vhost)
    {
        $this->_vhost = $vhost;
    }

    /**
     * @return string
     */
    public function getVhost()
    {
        return $this->_vhost;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->_host = $host;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->_host;
    }

    /**
     * @param string $port
     */
    public function setPort($port)
    {
        $this->_port = $port;
    }

    /**
     * @return string
     */
    public function getPort()
    {
        return $this->_port;
    }

    /**
     * @var \string
     */
    private $_host;

    /**
     * @param string $host
     * @param string $login
     * @param string $password
     * @return \AMQPConnection
     */
    public function connect($host = "127.0.0.1", $login = "guest", $password = "guest")
    {
        $this->setLogin($login)
            ->setPassword($password)
            ->setHost($host);

        $this->getConnection()->connect();

        return $this->getConnection();
    }

    /**
     * @param $login
     * @return Auffahrt
     */
    public function setLogin($login)
    {
        $this->_login = $login;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->_login;
    }

    /**
     * @param $password
     * @return Auffahrt
     */
    public function setPassword($password)
    {
        $this->_password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param $connection
     */
    public function setConnection($connection)
    {
        $this->_connection = $connection;
    }

    /**
     * @return \AMQPConnection
     */
    public function getConnection()
    {
        if (!$this->_connection) {
            $amqpConnection = new \AMQPConnection();
            $amqpConnection->setLogin($this->getLogin());
            $amqpConnection->setPassword($this->getPassword());
            $amqpConnection->setHost($this->getHost());
            $amqpConnection->setVhost($this->getVhost());
        }

        return $this->_connection;
    }

}
