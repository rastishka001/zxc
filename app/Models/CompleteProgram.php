<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompleteProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'deadlines',
        'shape',
        'naming',
        'coach',
        'volume_in_hours',
        'description'
    ];
}
