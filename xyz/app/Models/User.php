<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Database\Seeders\UserSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        // 'mobile',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    static public function getSingle($id)
    {
        return self::find($id);
    }

    // khali admin na j  users view dekhay ena mate
    static public function getadmin()
    {
        return self::select('users.*')
                          ->where('role_as','=',1)
                        //   ->whereDate('created_at','2024-04-03')
                          ->orderBy('id', 'asc')
                          ->get();

                        //   ->paginate(5);


    }

    // public function student_classes() //a relation apyu category nu brand jode ane Product jode
    // {
    //     return $this->hasMany(StudentClass::class);
    // }

// //For Forgot Passowrd
//     static public function getEmailSingle($email)
//     {
//         return User::where('email', '=', $email)->first();
//     }

}
