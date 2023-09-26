<?php

use App\Http\Controllers\CostumerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VehicleController;
use App\Models\Costumer;
use App\Models\user;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



route::group(['middleware' => 'auth'], function(){
    
    Route::get('/', function () {
        return view('home',[
            'user' => User::where('role', 'driver')->get(),
            'vehicle' => Vehicle::all(),
            'costumer' => Costumer::all()
        ]);
    })->name('home');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // Car Data for admin
    Route::get('/vehicle/index',[VehicleController::class, 'index'])->name('vehicle.index');
    Route::get('/vehicle/create',[VehicleController::class, 'create'])->name('vehicle.create');
    Route::post('/vehicle/store',[VehicleController::class, 'store'])->name('vehicle.store');
    Route::get('/vehicle/edit/{vehicle:slug}',[VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::put('/vehicle/update/{id}',[VehicleController::class, 'update'])->name('vehicle.update');
    Route::delete('/vehicle/delete/{vehicle:slug}',[VehicleController::class, 'destroy'])->name('vehicle.destroy');

    // pesanan for admin
    Route::get('/pesanan/index', [PesananController::class, 'index'])->name('pesanan.index');
    Route::post('pesanan/store', [PesananController::class, 'store'])->name('pesanan.store');
    Route::put('/pesanan/update/{id}', [PesananController::class, 'update'])->name('pesanan.update');


    // Driver Page
    Route::get('/driver/index', [DriverController::class, 'index'])->name('driver.index');
    Route::post('/driver/store', [DriverController::class, 'store'])->name('driver.store');


    // costumer Page
    Route::get('/costumer/index',[CostumerController::class, 'index'])->name('costumer.index');
    Route::get('/costumer/pesan/{vehicle:slug}',[CostumerController::class, 'pesan'])->name('costumer.pesan');
    Route::post('/costumer/store', [CostumerController::class, 'store'])->name('costumer.store');

});

route::group(['middleware' => 'guest'], function(){

    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
    
});



