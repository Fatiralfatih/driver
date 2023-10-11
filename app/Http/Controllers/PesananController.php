<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use App\Models\Permission;
use App\Models\Vehicle;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    function index()
    {

        $pesanan = pesanan::with(['costumer', 'vehicle', 'permission'])->get();
        return view('admin.pesanan.index', [
            'pesanans' => $pesanan
        ]);
    }

    function store(StorePesananRequest $request)
    {

        Pesanan::create([
            'invoice' => $request->invoice,
            'vehicle_id' => $request->vehicle_id,
            'status' => $request->status,
            'costumer_id' => $request->costumer_id,
            'tujuan' => $request->tujuan,
            'harga' => $request->harga,
            'pesan' => $request->pesan,
            'confirmed' => $request->confirmed
        ]);

        return redirect('costumer/status')->with('success', 'silahkan tunngu konfirmasi admin');
    }

    function show(Pesanan $pesanan)
    {
        $pesanan->findOrFail($pesanan->id);

        if($pesanan){
            $data = $pesanan->load(['vehicle.category', 'costumer', 'permission']);
        }
        return view('admin.pesanan.show', [
            'pesanan' => $data,
        ]);
    }

    function update(UpdatePesananRequest $request, $id)
    {
        $pesanan = Pesanan::where('id', $id)->firstOrFail();

        $pesanan->update([
            'driver_id' => $request->driver_id,
            'status' => $request->status,
        ]);

        if ($request->status == 'confirmed') {
            return redirect('pesanan/index')->with('success', 'pesanan berhasil dikonfirmasi');
        }

        return redirect()->back()->with('success', 'Pesanan berhasil di update');
    }

    function delete($id)
    {
        $pesanan = Pesanan::where('id', $id)->firstOrFail();

        $pesanan->delete();

        return redirect('pesanan/index')->with('success', 'data berhasil dihapus');
    }
}
