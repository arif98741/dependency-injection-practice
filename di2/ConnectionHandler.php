<?php

class ConnectionHandler
{
    private $connection;

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
    }

    public function makeConnection()
    {
        $this->connection->connect();
    }

}