<?php

namespace App\Models;

use App\Models\User;
use App\Models\Driver;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Costumer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function driver()
    {
        return $this->hasMany(Driver::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    
}
