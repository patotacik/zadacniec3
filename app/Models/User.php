<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    Protected $teble='users';
    protected $fillable=['meno','priezvisko','email','heslo','vek'];
}
