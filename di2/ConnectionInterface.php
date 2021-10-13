<?php

interface ConnectionInterface
{
    /**
     * @return mixed
     */
    public function initConnection();

    /**
     * @return mixed
     */
    public function checkConnection();

    /**
     * @return mixed
     */
    public function connect();

    /**
     * @return mixed
     */
    public function closeConnection();

}