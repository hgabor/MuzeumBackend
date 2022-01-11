<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'year',
        'on_display',
    ];

    protected $visible = [
        'id',
        'title',
        'year',
        'on_display',
    ];

    protected $casts = [
        'on_display' => 'boolean',
    ];
}
