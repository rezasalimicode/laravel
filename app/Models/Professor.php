<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name', 'email', 'department_id'
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function classroom()
    {
        return $this->hasMany(ClassRoom::class);
    }
}
