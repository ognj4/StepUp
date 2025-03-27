<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goals extends Model
{
    protected $table = 'goals';
    protected $fillable = ['name','description','target_value','current_value','deadline','status' , 'user_id'];
}
