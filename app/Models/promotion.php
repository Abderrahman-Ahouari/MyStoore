<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'new_price',
        'start_day',
        'end_day',
    ];
}
