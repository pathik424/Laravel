<?php

namespace App\Models\Backend\Product;

use App\Models\Backend\Brand;
use App\Models\Backend\Category\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodcut extends Model
{
    // use HasFactory;

    use HasFactory;

    protected $fillable = ['name','description','price','image','visible','cat_id','brand_id'];


   public function category() //a relation apyu category nu brand jode ane Product jode
   {
       return $this->belongsTo(Category::class,'cat_id','id');
   }

   public function brand() //a relation apyu category nu brand jode ane Product jode
   {
       return $this->belongsTo(Brand::class,'brand_id','id');
   }
}
