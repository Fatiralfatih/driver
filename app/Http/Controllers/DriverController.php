<?php

namespace App\Http\Controllers;

use App\Models\Persetujuan;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    function index() {
        return view('driver.index');
    }

    function pesanan() {

        $data = Pesanan::all();

        return view('driver.pesanan',[
            'pesanans' => $data
        ]);
    }
}
