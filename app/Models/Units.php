<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_unit';

    protected $fillable = [
        'nu_bus'   ,
        'tx_model' ,
        'tx_serial',
        'nu_place' ,
    ];
}
