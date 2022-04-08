<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['links','img', 'alt', 'sort'];

    protected $table = 'banners';
}
