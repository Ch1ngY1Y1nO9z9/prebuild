<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsType extends Model
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
    protected $fillable = ['type_name_en','img','sort'];

    public function Product()
    {
        return $this->hasMany('App\Product', 'product_type_id');
    }

    protected $table = 'products_type';
}
