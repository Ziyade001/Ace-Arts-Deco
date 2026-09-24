<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    protected $fillable = [
        'categorie',
        'images'
    ];

    protected $casts = [
        'images' => 'array'
    ];
}