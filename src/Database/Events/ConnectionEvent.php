<?php

namespace SoftTent\WpEloquent\Database\Events;

abstract class ConnectionEvent
{
    /**
     * The name of the connection.
     *
     * @var string
     */
    public $connectionName;

    /**
     * The database connection instance.
     *
     * @var \SoftTent\WpEloquent\Database\Connection
     */
    public $connection;

    /**
     * Create a new event instance.
     *
     * @param  \SoftTent\WpEloquent\Database\Connection  $connection
     * @return void
     */
    public function __construct($connection)
    {
        $this->connection = $connection;
        $this->connectionName = $connection->getName();
    }
}
