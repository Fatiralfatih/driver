<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pesanan;
use App\Models\Permission;
use App\Models\Persetujuan;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    function index() {
        return view('driver.index');
    }

    function pesanan() {

        $permission = Permission::where('driver_id', Auth()->user()->id)->get();
        return view('driver.pesanan',[
            'permissions' => $permission
        ]);
    }

    
}
