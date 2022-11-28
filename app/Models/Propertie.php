<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propertie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'rental_price', 'sale_price'];
}
