<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name', 'email','field_id', 'department_id'
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function course()
    {
        return $this->belongsToMany(Course::class, 'enrollments')
            ->withPivot('grade', 'enrollment_date')
            ->withTimestamps();
    }
    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}
