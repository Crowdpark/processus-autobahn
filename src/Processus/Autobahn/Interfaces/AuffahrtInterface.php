<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hippsterkiller
 * Date: 10/22/12
 * Time: 1:19 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Processus\Autobahn\Interfaces;
interface AuffahrtInterface
{
    /**
     * @param \string $host
     * @return mixed
     */
    public function setHost(\string $host);

    /**
     * @return \string
     */
    public function getHost();

    /**
     * @param \string $port
     * @return mixed
     */
    public function setPort(\string $port);

    /**
     * @return mixed
     */
    public function getPort();

    /**
     * @param \string $username
     * @param \string $password
     * @return mixed
     */
    public function setCredentials(\string $username, \string $password);

    /**
     * @return \string
     */
    public function getUsername();

    /**
     * @param \string $username
     * @return mixed
     */
    public function setUsername(\string $username);

    /**
     * @param \string $password
     * @return mixed
     */
    public function setPassword(\string $password);

    /**
     * @return mixed
     */
    public function getPassword();

    /**
     * @return mixed
     */
    public function getCredentials();

    /**
     * @param string $host
     * @param string $port
     * @param string $username
     * @param string $password
     * @return mixed
     */
    public function connect($host = "127.0.0.1", $port = "5555", $username = "root", $password = "root");

    /**
     * @return boolean
     */
    public function isConnected();
}
