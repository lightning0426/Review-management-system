<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    
    use HasFactory;
    
    protected $table = 'tbl_users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'birth',
        'prefecture_id',
        'city_id',
        'qualification_id',
    ];
}
