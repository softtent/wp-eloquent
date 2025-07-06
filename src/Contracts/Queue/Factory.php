<?php

namespace SoftTent\WpEloquent\Contracts\Queue;

interface Factory
{
    /**
     * Resolve a queue connection instance.
     *
     * @param  string|null  $name
     * @return \SoftTent\WpEloquent\Contracts\Queue\Queue
     */
    public function connection($name = null);
}
