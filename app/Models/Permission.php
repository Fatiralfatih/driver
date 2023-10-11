<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    function pesanan() {
        return $this->belongsTo(Pesanan::class);
    }

    function driver() {
        return $this->belongsTo(User::class, 'driver_id');
    }

    function admin() {
        return $this->belongsTo(User::class, 'admin_id');
    }
    
}
