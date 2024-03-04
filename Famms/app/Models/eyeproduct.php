<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eyeproduct extends Model
{
    use HasFactory;

    protected $fillable =['eyeproductname','price','image'];
}
