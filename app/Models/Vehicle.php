<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pesanan;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['user', 'category'];


    public function scopeFilter($query, array $filters)
    {   
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query
                ->where('name_vehicle', 'like', '%' . $search . '%')
            );

        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query
                ->whereHas('category', fn ($query) => 
                $query->where('name', $category)
                )
            );
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }


}
