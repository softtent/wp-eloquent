<?php

namespace SoftTent\WpEloquent\Database\Events;

class SchemaLoaded
{
    /**
     * The database connection instance.
     *
     * @var \SoftTent\WpEloquent\Database\Connection
     */
    public $connection;

    /**
     * The database connection name.
     *
     * @var string
     */
    public $connectionName;

    /**
     * The path to the schema dump.
     *
     * @var string
     */
    public $path;

    /**
     * Create a new event instance.
     *
     * @param  \SoftTent\WpEloquent\Database\Connection  $connection
     * @param  string  $path
     * @return void
     */
    public function __construct($connection, $path)
    {
        $this->connection = $connection;
        $this->connectionName = $connection->getName();
        $this->path = $path;
    }
}
