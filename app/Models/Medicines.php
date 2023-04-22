<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicines extends Model
{
    use HasFactory;
    protected $fillable = [
        'pharmacy_id',
        'product_name',
        'code_atx' ,
        'product_level',
        'release_form',
    ];

}
