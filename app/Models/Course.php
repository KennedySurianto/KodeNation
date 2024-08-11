<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'level',
        'instructor_id',
    ];

    public function instructor() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'course_categories', 'course_id', 'category_id');
    }

    public function lessons() {
        return $this->hasMany(Lesson::class);
    }

    public function quizzes() {
        return $this->hasMany(Quiz::class);
    }
}
