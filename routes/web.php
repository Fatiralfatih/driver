<?php

use App\Http\Controllers\CostumerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersetujuanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VehicleController;
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


Route::get('/', function () {
    return view('admin.home',[
        'title' => 'admin',
        'driver' => User::where('role', 'driver')->get(),
        'costumer' => User::where('role', 'costumer')->get(),
        'vehicle' => Vehicle::all(),
    ]);
})->name('home')->middleware('auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

route::group(['middleware' => 'auth'], function(){
    
    // Car Data for admin
    Route::get('/vehicle/index',[VehicleController::class, 'index'])->name('vehicle.index');
    Route::get('/vehicle/create',[VehicleController::class, 'create'])->name('vehicle.create');
    Route::post('/vehicle/store',[VehicleController::class, 'store'])->name('vehicle.store');
    Route::get('/vehicle/show/{vehicle:slug}',[VehicleController::class, 'show'])->name('vehicle.show');
    Route::get('/vehicle/edit/{vehicle:slug}',[VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::put('/vehicle/update/{id}',[VehicleController::class, 'update'])->name('vehicle.update');
    Route::delete('/vehicle/delete/{vehicle:slug}',[VehicleController::class, 'destroy'])->name('vehicle.destroy');
    
    // data pesanan for admin
    Route::get('/pesanan/index', [PesananController::class, 'index'])->name('pesanan.index');
    Route::get('/pesanan/show/{id}', [PesananController::class, 'show'])->name('pesanan.show');
    Route::post('/pesanan/store', [PesananController::class, 'store'])->name('pesanan.store');
    Route::put('/pesanan/update/{id}', [PesananController::class, 'update'])->name('pesanan.update');
    Route::delete('pesanan/delete/{id}', [PesananController::class, 'delete'])->name('pesanan.delete');

    // costumer page
    Route::get('/costumer/index', [CostumerController::class, 'index'])->name('costumer.index');
    Route::get('/costumer/status', [CostumerController::class, 'status'])->name('costumer.statusPesanan');
    Route::get('/costumer/show', [CostumerController::class, 'show'])->name('costumer.show');
    Route::get('/costumer/pesan/{vehilce:slug}', [CostumerController::class, 'pesan'])->name('costumer.pesan');
    
    // driver page
    Route::get('/driver/index', [DriverController::class, 'index'])->name('driver.index');
    Route::get('/driver/pesanan', [DriverController::class, 'pesanan'])->name('driver.pesanan');

});

route::group(['middleware' => 'guest', 'prefix' => 'auth'], function(){

    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');
    
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
    
});



