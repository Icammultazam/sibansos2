<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        
        $query->when($filters['search'] ?? false, function($query, $search){
            return  $query->where('NOKK', 'like', '%'.$search.'%')
                 ->orWhere('NIK', 'like', '%'.$search.'%' );
        });

    }
};


