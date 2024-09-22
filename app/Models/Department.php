<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_name'
    ];
    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function professor()
    {
        return $this->hasMany(Professor::class);
    }
    public function cours()
    {
        return $this->hasMany(Course::class);
    }
}
