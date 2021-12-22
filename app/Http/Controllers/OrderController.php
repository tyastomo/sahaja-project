<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeService;
use App\Models\Orders;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Alert;
use App\Services\ProductService;
use App\Services\MasterService;

class OrderController extends Controller
{

	public function __construct(ProductService $productService, MasterService $masterService) {
        $this->productService = $productService;
        $this->masterService = $masterService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function cek(Request $request, $id)
    {
        try
        {
            $result = Orders::where('event_date', $request->tanggal)
                                ->where('location_id', $request->lokasi)
                                ->where('time_service_id', $request->waktu)
                                ->first();
            if($result)
            {
                return redirect()->back();
				Alert::error('Kesalahan!', 'Waktu dan Tempat Tidak Tersedia!');
            }

            $tanggal = $request->tanggal;
            $lokasi = $this->masterService->getLocation($request->lokasi);
            $waktu = $this->masterService->getTime($request->waktu);
			$result = $this->productService->getOne($id);

			Alert::success('Berhasil!', 'Silahkan lengkapi form berikut');
            return view('order.form', ['tanggal' => $tanggal,
                                        'lokasi' => $lokasi,
                                        'waktu' => $waktu,
										'product' => $result]);
        } catch (\Throwable $th) {
            dd("Controller error. " . $th->getMessage());
            return false;
        }
    }

    public function store(Request $request)
    {
        try
        {
            $price = Products::where('uuid', $request->product)->first();
            $price = $price->price;

            $additional = 0;
            if($request->additional)
            {
                $additional = ProductAdditionalPax::where('uuid', $request->additional)->first();
                $additional = $additional->cost;
            }

            $total = $price + $additional;

            DB::beginTransaction();

            $result = Order::create([
                'uuid' => generateUuid(),
                'product_id' => $request->product,
                'additional_id' => $request->additional,
                'total' => $total,
                'payment_status' => 1,
                'snap_token' => $snap,
                'event_date' => $request->tanggal,
                'location_id' => $request->lokasi,
                'time_service_id' => $request->waktu,
                'customer_id' => $customer->uuid,
                'cpp' => $request->cpp,
                'cpw' => $request->cpw
            ]);

            DB::commit();


        } catch (\Throwable $th) {
            DB::rollback();
            dd("Service error. " . $th->getMessage());
            return false;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    } 
}
