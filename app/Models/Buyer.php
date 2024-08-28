<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $table="buyers";

    protected $fillable =[
        'car_id',
        'name',
        'contact',
        'email'
    ];
    public function car() {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }

}
