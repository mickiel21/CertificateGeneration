<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Certificate;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];
    
     // Define the relationship to certificates
     public function certificates()
     {
         return $this->hasMany(Certificate::class);
     }
}
