<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_free' => 'boolean',
        'is_active' => 'boolean',
        'published_at' => 'datetime',
    ];


    public function lessons()
    {
        return $this->hasManyThrough(
            CourseLesson::class,
            CourseModule::class,
            'course_id',        
            'course_module_id', 
            'id',
            'id'
        );
    }


    public function modules()
    {
        return $this->hasMany(CourseModule::class)->orderBy('order');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_courses')
            ->withPivot(['status', 'starts_at', 'ends_at'])
            ->withTimestamps();
    }


    public function isPurchasedByStudent(): bool
    {
        $student = auth('student')->user();

        if (! $student) {
            return false;
        }

        return $this->students()
            ->where('student_id', $student->id)
            ->wherePivot('status', 'active')
            ->exists();
    }


    protected static function booted()
    {
        static::saving(function ($course) {
            if (empty($course->slug)) {
                $course->slug = Str::slug($course->title);
            }
        });
    }
    
}
