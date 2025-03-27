<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected $table = 'activities';
    protected $fillable = [
        'name', 'description', 'duration','date', 'user_id', 'category_id'
    ];
}
