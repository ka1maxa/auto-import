<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechnicalSpecification extends Model
{
    protected $fillable = [
        'car_id', 'engine_volume', 'fuel',
        'transmission', 'drive', 'body_type', 'color',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}