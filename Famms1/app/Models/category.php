<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','image','visible'];

    public function brands() //a relation apyu category nu brand jode ane Product jode
    {
        return $this->hasMany(brand::class);
    }

    public function Products() //a relation apyu category nu brand jode ane Product jode
    {
        return $this->hasMany(product::class);
    }

}




/*Summery of add category

1. php artisan make categorycontroller
2. php artisan make model category -m
3. add migration list of tables and php artisan migrate
4. for data showing in controller Request $request in store / store means data show thase je fill karyo hase e  Request $request
5. model ma table no name lakhi devana protected $fillable
6. view vali file ma form tag ane field ma name nakhi devu addcategory ane message valu pan set kari devenu
7. databese connection controller ma store ma je Acategory model valu che ena thi thase
8.

*/
