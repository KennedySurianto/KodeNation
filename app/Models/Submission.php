<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'student_id',
        'score'
    ];

    public function quiz() {
        return $this->belongsTo(Quiz::class);
    }

    public function student() {
        return $this->belongsTo(User::class, 'student_id', 'user_id');
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }
}
