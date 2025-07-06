<?php

namespace SoftTent\WpEloquent\Database\Events;

use SoftTent\WpEloquent\Contracts\Database\Events\MigrationEvent as MigrationEventContract;
use SoftTent\WpEloquent\Database\Migrations\Migration;

abstract class MigrationEvent implements MigrationEventContract
{
    /**
     * An migration instance.
     *
     * @var \SoftTent\WpEloquent\Database\Migrations\Migration
     */
    public $migration;

    /**
     * The migration method that was called.
     *
     * @var string
     */
    public $method;

    /**
     * Create a new event instance.
     *
     * @param  \SoftTent\WpEloquent\Database\Migrations\Migration  $migration
     * @param  string  $method
     * @return void
     */
    public function __construct(Migration $migration, $method)
    {
        $this->method = $method;
        $this->migration = $migration;
    }
}
