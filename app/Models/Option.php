<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
        
    protected $fillable = [
        'text',
        'question_id',
    ];
    
    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
    
    public function Answer()
    {
        return $this->hasOne('App\Models\Answer');
    }
}
