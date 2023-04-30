<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * @method static create(array|string[] $array_merge)
 */
class Doctor extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'doctor_name',
        'doctor_phone',
        'doctor_specialist',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime:d-M-Y h:i:s a',
        'updated_at' => 'datetime:d-m-Y h:i:s a',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    public function getJWTCustomClaims():array
    {
        return [];
    }

    public function appointment()
    {
        return $this->belongsTo('App\Appointment');
    }
}
