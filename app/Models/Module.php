<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    
    public function course(){
        return $this->belongsTo(Couse::class);
    }
    
    public function lesson(){
        return $this->hasMany(Lesson::class);
    }

}
