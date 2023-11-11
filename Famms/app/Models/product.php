<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','image','visible','cat_id','brand_id'];

    public function category()
    {
        return $this->belongsTo(category::class,'cat_id','id');

    }

    public function brand()
    {
        return $this->belongsTo(brand::class,'brand_id','id');

    }

}
