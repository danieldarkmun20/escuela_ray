<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'nivel',
    ];
    
    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }

}
