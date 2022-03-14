<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travels extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_travel';

    protected $fillable = [
        'co_travel',
        'nu_Kilometer',
        'co_origin',
        'co_destiny',
    ];
}
