<?php

namespace App\Services;

use App\Models\TimeService;
use App\Models\Locations;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MasterService
{
    public function getAllTime() {
        try {
            $result = TimeService::all();
            return $result;
        }
        catch (\Throwable $th) {
            DB::rollback();
            dd("Service error. " . $th->getMessage());
            return false;
        }
    }

	public function getTime($id) {
        try {
            $result = TimeService::where('uuid', $id)->first();
            return $result;
        }
        catch (\Throwable $th) {
            DB::rollback();
            dd("Service error. " . $th->getMessage());
            return false;
        }
    }

    public function getAllLocation() {
        try {
            $result = Locations::all();
            return $result;
        }
        catch (\Throwable $th) {
            DB::rollback();
            dd("Service error. " . $th->getMessage());
            return false;
        }
    }

	public function getLocation($id) {
        try {
            $result = Locations::where('uuid', $id)->first();
            return $result;
        }
        catch (\Throwable $th) {
            DB::rollback();
            dd("Service error. " . $th->getMessage());
            return false;
        }
    }
}