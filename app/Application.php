<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    protected $table = 'applications';
}
