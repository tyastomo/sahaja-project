<?php

namespace App\Services;

use App\Models\Products;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductService
{
    public function getAll($request) {
        try {
            $result = Products::when($request->name, function ($query) use ($request) {
    			$query->where('name', 'like', '%' . $request->name . '%');
    		})
            ->with('category', 'additional')
            ->get();
            return $result;
        }
        catch (\Throwable $th) {
            DB::rollback();
            dd("Service error. " . $th->getMessage());
            return false;
        }
    }

    public function getOne($id) {
        try {
            $result = Products::where('uuid', $id)
            ->with('category', 'additional')
            ->first();

            return $result;
        }
        catch (\Throwable $th) {
            DB::rollback();
            dd("Service error. " . $th->getMessage());
            return false;
        }
    }
}
