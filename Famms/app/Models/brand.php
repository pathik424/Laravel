<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','image','visible','cat_id'];

    public function category()
    {
        return $this->belongsTo(category::class,'cat_id','id');

    }

    public function Products() //a relation apyu category nu brand jode ane Product jode
    {
        return $this->hasMany(product::class);
    }
}
