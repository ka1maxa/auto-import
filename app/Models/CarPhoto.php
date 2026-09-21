<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarPhoto extends Model
{
    protected $fillable = ['car_id', 'path', 'is_main'];

    protected function casts(): array
    {
        return ['is_main' => 'boolean'];
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}