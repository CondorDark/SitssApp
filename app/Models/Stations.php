<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stations extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_station';

    protected $fillable = [
        'na_station',
        'sg_station',
    ];
}
