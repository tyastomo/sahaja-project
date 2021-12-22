<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    protected $table      = 'product_details';
    protected $fillable = [
        'uuid',
        'product_id',
        'detail',
        'icon'
    ];
}
