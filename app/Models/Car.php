<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table="cars";

    protected $fillable =[
        'type',
        'brand',
        'name',
        'price',
        'description',
        'maindescription',
        'image',

    ];
    public function buyer() {
        return $this->hasOne(Buyer::class, 'car_id', 'id');
    }
}
