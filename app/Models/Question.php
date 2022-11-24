<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'text',
        'correct_answer',
        'lesson_id',
    ];
    
    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson');
    }
    
    public function options()
    {
        return $this->hasMany('App\Models\Option');
    }
}
