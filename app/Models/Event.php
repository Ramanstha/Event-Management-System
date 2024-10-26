<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function attendees(){
        return $this->hasMany(Attendees::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
