<?php

use Ramsey\Uuid\Uuid;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

function writeLog($message)
{
	try {
		\Log::error($message);
	    return response()->json([
	    	'success' => false,
	    	'message' => env('APP_DEBUG') ? $message : 'Terjadi kesalahan',
	    	'code'    => 500,
	    ]);
	} catch (Exception $e) {
		return false;
	}
}

function generateUuid()
{
	try {
		return Uuid::uuid4();
	} catch (Exception $e) {
		return false;
	}
}

function generateOtp()
{
	return substr(str_shuffle('1234567890'), 0, 6);
}

function formatTanggal($tanggal)
{
	return date('Y-m-d H:i:s', strtotime($tanggal));
}
