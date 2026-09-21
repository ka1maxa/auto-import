<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dealer extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id','name','phone','city'];

    public function user()
    {
        return $this->belogsTo(User::class);
    }
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
