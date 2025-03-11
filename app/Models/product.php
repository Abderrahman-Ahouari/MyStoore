<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'categorie_id',
        'name',
        'description',
        'price',
        'stock',
        'image',
        'popular',
        'promotion',
    ];

    public function section(){
        return $this->belongsto(section::class);
    }

    public function sales(){
        return $this->hasMany(sale::class);
    }

    public function promotions(){
        return $this->hasMany(promotion::class);
    }

    public function categorie(){
        return $this->belongsto(categorie::class);
    }
}
