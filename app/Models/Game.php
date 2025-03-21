<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'developer',
        'genre',
        'release_date',
        'platform',
        'price',
        'cover_image',
    ];
}
