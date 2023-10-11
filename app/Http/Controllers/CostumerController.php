<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    function index() {
        return view('costumer.index');
    }


    function show() {
        $vehicle = Vehicle::with(['pesanan'])->where('status', 1)->get();
        return view('costumer.show',[
            'vehicles' => $vehicle
        ]);
    }

    function pesan($slug) {

        $vehicle = Vehicle::where('slug', $slug)->firstOrFail();

        return view('costumer.pesan',[
            'vehicle' => $vehicle
        ]);

    }

    function status() {
        $pesanan = Pesanan::latest()->get();
        return view('costumer.status-pesanan',[
            'pesanans' => $pesanan
        ]);
    }

}
