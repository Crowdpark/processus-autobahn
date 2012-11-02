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
    function setHost(\string $host);

    /**
     * @return \string
     */
    function getHost();

    /**
     * @param \string $port
     * @return mixed
     */
    function setPort(\string $port);

    /**
     * @return mixed
     */
    function getPort();

    /**
     * @param \string $username
     * @param \string $password
     * @return mixed
     */
    function setCredentials(\string $username, \string $password);

    /**
     * @return \string
     */
    function getUsername();

    /**
     * @param \string $username
     * @return mixed
     */
    function setUsername(\string $username);

    /**
     * @param \string $password
     * @return mixed
     */
    function setPassword(\string $password);

    /**
     * @return mixed
     */
    function getPassword();

    /**
     * @return mixed
     */
    function getCredentials();

    /**
     * @return boolean
     */
    function connect();

    /**
     * @return boolean
     */
    function isConnected();
}
