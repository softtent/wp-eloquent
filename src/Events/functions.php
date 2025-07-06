<?php

namespace SoftTent\WpEloquent\Events;

use Closure;

if (! function_exists('SoftTent\WpEloquent\Events\queueable')) {
    /**
     * Create a new queued Closure event listener.
     *
     * @param  \Closure  $closure
     * @return \SoftTent\WpEloquent\Events\QueuedClosure
     */
    function queueable(Closure $closure)
    {
        return new QueuedClosure($closure);
    }
}
