<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Costumer;
use App\Models\Driver;

class Pesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function costumer()
    {
        return $this->hasMany(Costumer::class);
    }

    public function driver()
    {
        return $this->hasMany(Driver::class);
    }


}
