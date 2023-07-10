<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use HasFactory;
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at',
    ];
    

    public function getAuthPassword()
    {
        return $this->password;
    }
   

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

}
