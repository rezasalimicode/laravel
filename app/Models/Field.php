<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'credits'
    ];
    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function course()
    {
        return $this->hasMany(Course::class);
    }

}
