<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table      = 'orders';
    protected $fillable = [
        'uuid',
        'product_id',
        'additional',
        'total',
        'payment_status',
        'snap_token',
        'event_date',
        'location_id',
        'time_service_id',
        'customer_id',
        'cpp',
        'cpw',
        'detail_alamat'
    ];
}
