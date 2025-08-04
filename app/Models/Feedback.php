<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'name',
        'email',
        'department',
        'rating',
        'recommend',
        'message'
    ];

    // Accessor for department full name
    public function getDepartmentFullAttribute()
    {
        return [
            'CS' => 'Computer Science',
            'IT' => 'Information Technology',
            'SE' => 'Software Engineering',
        ][$this->department] ?? $this->department;
    }
}
