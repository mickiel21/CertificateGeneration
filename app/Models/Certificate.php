<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Lesson;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lesson_id',
    ];

    // Define the relationship to users and lessons
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
