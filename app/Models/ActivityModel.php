<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityModel extends Model
{
    protected $table = 'activity';
    protected $fillable = ['name', 'description', 'duration', 'date'];
}
