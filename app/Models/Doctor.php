<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Gender;

class Doctor extends Authenticatable
{
    use HasFactory;

    protected $guard = "doctor";

    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'avatar',
        'description',
        'location',
        'city',
        'latitude',
        'longitude',
        'updated_at',
        'created_at'
        // 'review_count',
        // 'rate_count'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // protected $casts = [
    //     'gender' => Gender::class
    // ];
}