<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersetujuanRequest;
use App\Models\Persetujuan;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PersetujuanController extends Controller
{
    function terima(Pesanan $pesanan) {

        return view('persetujuan.terima',[
            'pesanans' => $pesanan
        ]);
    }

    function store(StorePersetujuanRequest $request) {

        Persetujuan::create([
            'driver_id' => $request->driver_id,
            'pesanan_id' => $request->pesanan_id,
            'pesan' => $request->pesan,
            'confirmed' => $request->confirmed
        ]);

        return redirect('driver/pesanan')->with('success', 'Pesanan berhasil diterima');

    }
}
