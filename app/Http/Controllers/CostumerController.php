<?php

namespace App\Http\Controllers;

use App\Http\Requests\CostumerStoreRequest;
use App\Models\Costumer;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    function index() {

        $vehicle = Vehicle::latest()
                ->where('status', true)
                ->filter(request(['category']))
                ->get();

        return view('costumer.index',[
            'vehicles' => $vehicle
        ]);
    }

    // fungsi pesan

    function pesan(Vehicle $vehicle) {

        $costumer = Costumer::all();

        return view('costumer.pesan',[
            'vehicle' => $vehicle,
            'costumer' => $costumer
        ]);
    }

    function store(CostumerStoreRequest $request) {

        $vehicle = Vehicle::find($request->vehicle_id);

        if ( $vehicle && $request->transaction < $vehicle->price ){
            return redirect()->back()->with('error', 'harga tidak sesuai');
        }

        Costumer::create([
            'user_id' => $request->user_id,
            'vehicle_id' => $request->vehicle_id,
            'pesan' => $request->pesan,
            'tujuan' => $request->tujuan,
            'transaction' => $request->transaction,
            'coment' => $request->coment
        ]);

        return redirect('/costumer/index')->with('success', 'Vehicle Berhasil Di Pesan, Silahkan Tunggu');

    }
}
