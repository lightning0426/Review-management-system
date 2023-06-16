<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nursery extends Model
{
    use HasFactory;

    protected $table = 'tbl_nursery';

    protected $fillable = [
        'name',
        'address',
        'city_id',
        'cooperate_id'
    ];
}
