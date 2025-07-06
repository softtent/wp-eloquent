<?php

namespace SoftTent\WpEloquent\Contracts\Support;

interface DeferringDisplayableValue
{
    /**
     * Resolve the displayable value that the class is deferring.
     *
     * @return \SoftTent\WpEloquent\Contracts\Support\Htmlable|string
     */
    public function resolveDisplayableValue();
}
