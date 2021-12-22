<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeService extends Model
{
    protected $table      = 'master_time_services';
    protected $fillable = [
        'uuid',
        'name',
        'start_hour',
        'end_hour'
    ];
}
