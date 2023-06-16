<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrefectureRegion extends Model
{
    use HasFactory;

    protected $table = 'tbl_prefecture_region';

    protected $fillable = [
        'name',
        'en_name'
    ];
}
