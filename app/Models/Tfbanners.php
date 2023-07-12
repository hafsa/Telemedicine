<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tfbanners extends Model
{
    use HasFactory;

    protected $table = "tf_banners";

    protected $fillable = [
        'banner_name',
        'banner_image',
        'banner_url',
        'is_fullsize',
        'status'
    ];
}