<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainRegion extends Model
{
    use HasFactory;

    protected $table = 'tbl_main_region';

    protected $fillable = [
        'name'
    ];
}
