<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAdditionalPax extends Model
{
    protected $table      = 'product_additional_pax';
    protected $fillable = [
        'uuid',
        'product_id',
        'pax',
        'cost'
    ];
}
