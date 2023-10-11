<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Requests\PermissionStoreRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Models\User;

class PermissionController extends Controller
{
    function changeDriver($id)
    {
        $permission = Permission::findOrFail($id);
        $user = User::where('role', 'driver')->get();
        return view('admin.permission.change-driver', [
            'permission' => $permission,
            'users' => $user
        ]);
    }

    function update(UpdatePermissionRequest $request, $id)
    {
        $permission = Permission::where('id', $id)->firstOrFail();

        $permission->update([
            'pesanan_id' => $request->pesanan_id,
            'admin_id' => $request->admin_id,
            'driver_id' => $request->driver_id,
            'confirmed' => $request->confirmed,
            'pesan' => $request->pesan
        ]);

        if ($request->pesanan_id) {
            if (Auth()->user()->role == 'admin') {
                $pesanan = Pesanan::find($request->pesanan_id);
                $pesanan->update(['status' => 'waiting']);
                return redirect('pesanan/index')->with('success', 'Driver Berhasil ditambahkan');
            } elseif (Auth()->user()->role == 'driver') {
                if ($request->confirmed) {
                    $pesanan = Pesanan::find($request->pesanan_id);
                    $pesanan->update(['status' => 'success']);
                    return redirect('driver/pesanan')->with('success', 'Pesanan Berhasil diterima');
                }else{
                    $pesanan = Pesanan::find($request->pesanan_id);
                    $pesanan->update(['status' => 'failed']);
                    return redirect()->back()->with('error', 'pesanan ditolak');
                }
            }
        }
    }
    function store(PermissionStoreRequest $request)
    {
        if ($request->pesanan_id) {
            $pesanan = Pesanan::find($request->pesanan_id);
            $pesanan->update(['status' => 'confirmed']);
        }

        Permission::create([
            'pesanan_id' => $request->pesanan_id,
            'admin_id' => $request->admin_id,
            'confirmed' => $request->confirmed
        ]);

        return redirect('/pesanan/index')->with('success', 'Pesanan Berhasil Dikonfirmasi');
    }
}
