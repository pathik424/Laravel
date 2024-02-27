<?php

namespace App\Models;

use App\Http\Controllers\Backend\Ajax\AjaxController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','image'];

    
}
