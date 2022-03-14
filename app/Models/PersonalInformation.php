<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_personal_information';

    protected $fillable = [
        'nu_identification',
        'na_personal_information',
        'tx_Shirt_Size',
        'nu_Pant_Size',
        'nu_Footwear_Size',
    ];
}
