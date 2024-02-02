<?php

namespace App\Models\Backend\Category;

use App\Models\Backend\Brand;
use App\Models\Backend\Product\prodcut;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

   protected $fillable = ['name','description','image','visible'];

   public function brands() //a relation apyu category nu brand jode ane Product jode
   {
       return $this->hasMany(Brand::class);
   }

   public function Products() //a relation apyu category nu brand jode ane Product jode
   {
       return $this->hasMany(prodcut::class);
   }
}

