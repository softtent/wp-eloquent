<?php

namespace SoftTent\WpEloquent\Contracts\Support;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \SoftTent\WpEloquent\Contracts\Support\MessageBag
     */
    public function getMessageBag();
}
