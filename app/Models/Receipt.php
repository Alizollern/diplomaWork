<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    protected $fillable = [
        'receipt_title',
        'receipt_comments',
        'receipt_date',
        'receipt_doctor_id',
        'receipt_user_id'
    ];

}
