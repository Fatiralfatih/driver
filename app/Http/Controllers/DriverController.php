<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDriverRequest;
use App\Models\Costumer;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    function index() {

        $costumer = Costumer::with('driver')->get();

        return view('driver.index',[
            'costumers' => $costumer
        ]);
    }

    function store(StoreDriverRequest $request) {

        Driver::create([
            'costumer_id' => $request->costumer_id,
            'user_id' => $request->user_id,
            'confirmed' => $request->confirmed
        ]);

        return redirect('/driver/index')->with('success', 'Pesanan Berhasil Diterima Silahkan Tunggu');

    }
}
