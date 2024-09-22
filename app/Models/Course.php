<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name', 'credits', 'professor_id','field_id', 'department_id'
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
    public function student()
    {
        return $this->belongsToMany(Student::class, 'enrollments')
            ->withPivot('grade', 'enrollment_date')
            ->withTimestamps();
    }
    public function field()
    {
        return $this->belongsToMany(Field::class);
    }
    public function classroom()
    {
        return $this->hasMany(ClassRoom::class);
    }
}
