<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\MasterService;

class LandingController extends Controller
{
    public function __construct(Request $request, ProductService $productService, MasterService $masterService) {
        $this->request = $request;
        $this->productService = $productService;
        $this->masterService = $masterService;
    }

    public function index()
    {
        try
        {
            $result = $this->productService->getAll($this->request);

            return view('pages.index', ['data' => $result]);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function getOne($id)
    {
        try
        {
            $result = $this->productService->getOne($id);

            $waktu = $this->masterService->getAllTime();
            $loc = $this->masterService->getAllLocation();
            // return $result;

            return view('pages.product', ['data' => $result,
                                        'locations' => $loc,
                                        'times' => $waktu]);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

}
