<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
            
    protected $fillable = [
        'option_id',
        'user_id',
    ];
    
    public function option()
    {
        return $this->belongsTo('App\Models\Option');
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
