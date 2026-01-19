<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'device_fingerprint',
        'last_login_at',
        'is_active'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function courses()
    {
        return $this->belongsToMany(Course::class, 'student_courses')
            ->withPivot(['status', 'starts_at', 'ends_at'])
            ->withTimestamps();
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }


}
