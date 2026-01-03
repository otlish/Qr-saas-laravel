<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'email',
        'logo_url',
        'primary_color',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}