<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    protected $table      = 'master_location_services';
    protected $fillable = [
        'uuid',
        'name',
        'location_code'
    ];
}
