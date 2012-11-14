<?php
/**
 * Created by IntelliJ IDEA.
 * User: hissterkiller
 * Date: 11/14/12
 * Time: 7:16 PM
 * To change this template use File | Settings | File Templates.
 */

if(class_exists("ZMQ") && defined("ZMQ::LIBZMQ_VER")) {
    echo ZMQ::LIBZMQ_VER, PHP_EOL;
}