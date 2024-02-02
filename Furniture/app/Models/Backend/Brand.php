<?php

namespace App\Models\Backend;

use App\Models\Backend\Category\Category;
use App\Models\Backend\Product\prodcut;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','image','visible'];


   public function category() //a relation apyu category nu brand jode ane Product jode
   {
       return $this->belongsTo(Category::class,'cat_id','id');
   }

   public function Products() //a relation apyu category nu brand jode ane Product jode
   {
       return $this->hasMany(prodcut::class);
   }
}
