<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use App\Models\Vehicle;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\Persetujuan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    function index() {

        $pesanan = pesanan::with(['costumer','vehicle', 'driver'])->get();
        return view('admin.pesanan.index',[
            'pesanans' => $pesanan
        ]);
    }

    function store(StorePesananRequest $request) {
        
        Pesanan::create([
            'vehicle_id' => $request->vehicle_id,
            'status' => $request->status,
            'costumer_id' => $request->costumer_id,
            'tujuan' => $request->tujuan,
            'harga' => $request->harga,
            'pesan' => $request->pesan
        ]);

    return redirect('costumer/status')->with('success', 'silahkan tunngu konfirmasi admin');

    }

    function show($id) {
        $pesanan = Pesanan::where('id', $id)->with(['costumer', 'driver'])->firstOrFail();

        return view('admin.pesanan.show',[
            'pesanan' => $pesanan,
        ]);
    }

    function update( UpdatePesananRequest $request,$id) {
        $pesanan = Pesanan::where('id', $id)->firstOrFail();

        $pesanan->update([
            'driver_id' => $request->driver_id,
            'status' => $request->status,
        ]);

        if(Auth()->user()->role == 'driver'){

            if($pesanan->status == 'failed'){
                return redirect('driver/pesanan')->with('success', 'pesanan berhasil ditolak');
            }elseif($pesanan->status == 'confirmed'){
                return redirect('driver/pesanan')->with('success', 'pesanan berhasil diterima');
            }
            
        }

        return redirect('pesanan/index')->with('success', 'pesanan berhasil diupdate');

    }

    function delete($id) {
        $pesanan = Pesanan::where('id', $id)->firstOrFail();

        $pesanan->delete($pesanan);

        return redirect('pesanan/index')->with('success', 'data berhasil dihapus');
    }

}
