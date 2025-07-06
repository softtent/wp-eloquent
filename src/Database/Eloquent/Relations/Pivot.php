<?php

namespace SoftTent\WpEloquent\Database\Eloquent\Relations;

use SoftTent\WpEloquent\Database\Eloquent\Model;
use SoftTent\WpEloquent\Database\Eloquent\Relations\Concerns\AsPivot;

class Pivot extends Model
{
    use AsPivot;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
