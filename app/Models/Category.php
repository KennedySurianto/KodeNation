<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function courses() {
        return $this->belongsToMany(Course::class, 'course_categories', 'category_id', 'course_id');
    }
}
