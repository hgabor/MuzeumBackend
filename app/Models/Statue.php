<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statue extends Model
{
    use HasFactory;

    protected $fillable = ['person', 'height', 'price'];
}
