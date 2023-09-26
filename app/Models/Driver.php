<?php

namespace App\Models;

use App\Models\Costumer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Driver extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

   
    public function costumer()
    {
        return $this->hasMany(Costumer::class);
    }
}
