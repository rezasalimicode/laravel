<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Enrollment extends Pivot
{
    use HasFactory;
    protected $fillable = [
        'student_id', 'class_id'
    ];
}
