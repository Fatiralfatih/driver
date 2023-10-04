<?php

namespace App\Models;

use App\Models\Vehicle;
use App\Models\User;
use App\Models\persetujuan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function costumer()
    {
        return $this->belongsTo(User::class, 'costumer_id');
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    public function persetujuan()
    {
        return $this->hasMany(Persetujuan::class);
    }


}
