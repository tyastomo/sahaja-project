<?php

namespace App\Services;

use App\Models\Orders;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OrderService
{

    public function cek($request)
    {
        try 
        {
            $result = Orders::where('event_date', $request->tanggal)
                                ->where('location_id', $request->lokasi)
                                ->where('time_service_id', $request->waktu)
                                ->first();
            if($result)
            {
                return false;
            }

            return true;
        } catch (\Throwable $th) {
            dd("Service error. " . $th->getMessage());
            return false;
        }
    }
}