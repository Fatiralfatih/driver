<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCostumerRequest;
use App\Models\Costumer;
use App\Models\Pesanan;
use App\Models\Driver;
use Exception;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    function index() {
        
        $pesanan = Pesanan::all();
        $driver = Driver::all();


        return view('pesanan.index',[
            'pesanans' => $pesanan
        ]);
    }


    function update( $request, $id) {
        try {
            $costumer = Costumer::where('id', $id)->firstOrFail();

            $costumer->update([
            'status' => $request->status
        ]);

        return redirect('/pesanan/index');

        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
