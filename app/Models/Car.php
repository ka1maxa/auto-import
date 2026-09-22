<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = 
    [
        'dealer_id', 'vin', 'brand', 'model', 'year',
        'price', 'currency', 'mileage', 'status', 'description',
    ];

    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }

    public function technicalSpecification()
    {
        return $this->hasOne(TechnicalSpecification::class);
    }
    
    public function photos()
    {
        return $this->hasMany(CarPhoto::class);
    }
}
