<?php
/**
 * Created by IntelliJ IDEA.
 * User: hissterkiller
 * Date: 11/15/12
 * Time: 4:33 PM
 * To change this template use File | Settings | File Templates.
 */


//Create a UDP socket
$sock = socket_create(AF_INET, SOCK_DGRAM, 0);

echo "Socket created \n";

// Bind the source address
socket_bind($sock, "0.0.0.0" , 9999);

echo "Socket bind OK \n";

// Do some communication, this loop can handle multiple clients
while(1)
{
    echo "Waiting from client ... \n";

    //Receive some data
    $r = socket_recvfrom($sock, $buf, 512, 0, $remote_ip, $remote_port);
    echo "$remote_ip : $remote_port -- " . $buf;

    //Send back the data to the client
    //socket_sendto($sock, $buf." OK" , 100 , 0 , $remote_ip , $remote_port);
}

//socket_close($sock);