<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'teacher_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }
}
