<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id','professor_id', 'room_id'
    ];
    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
