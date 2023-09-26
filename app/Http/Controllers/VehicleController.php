<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Category;
use App\Models\Vehicle;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{
    function index() {

        $vehicle = Vehicle::latest()
                    ->filter(request(['search', 'category']))
                    ->paginate(5);

        return view('vehicle.index',[
            'vehicle' => $vehicle,
        ]);
    }

    function create() {

        $category = Category::latest()->get();
        $vehicle = Vehicle::latest()->get();

        return view('vehicle.create',[
            'categories' => $category,
            'vehicles' => $vehicle
        ]);
    }
    
    function store(CreateVehicleRequest $request) {

        if($request->status == 'on'){
            $status = true;
        } else if ( $request->status == '' ){
            $status = false;
        }

        if($request->file('gambar')){

            if($request->oldImage){
                Storage::delete($request->oldImage);
            }

            $gambar = $request->file('gambar')->store('photo');
        }else{
            $gambar = '';
        }

        Vehicle::create([
            'name_vehicle' => $request->name_vehicle,
            'slug' => $request->slug,
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'status' => $status,
            'gambar' => $gambar
        ]);

        

        return redirect('/vehicle/index')->with('success', 'Vehicle Berhasil ditambahkan');

    }

    function edit(Vehicle $vehicle) {

        $category = Category::with('vehicle')->get();

        $user = User::where('role', 'driver')->get();

        return view('vehicle.edit',[
            'vehicle' => $vehicle,
            'users' => $user,
            'categories' => $category,
        ]);
    }

    function update(UpdateVehicleRequest $request, $id) {

        $vehicle = Vehicle::where('id', $id)->firstOrFail();

        if($request->status == 'on'){
            $status = true;
        } else if ( $request->status == 'off' ){
            $status = false;
        }

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $gambar = $request->file('gambar')->store('photo');
        } else{
            $gambar = '';
        }

        $vehicle->update([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'body' => $request->body,
            'name_vehicle' => $request->name_vehicle,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'status' => $status,
            'gambar' => $gambar
        ]);

        return redirect('/vehicle/index')->with('success', 'Vehicle Berhasil diupdate');

    }

    function destroy(Vehicle $vehicle) {
        
        if($vehicle->gambar){
            Storage::delete($vehicle->gambar);
        }

        $vehicle::where('slug', $vehicle->slug)->firstOrFail();
        $vehicle->delete();

        return redirect('/vehicle/index')->with('success', 'Vehicle Berhasil Dihapus');

    }

}
