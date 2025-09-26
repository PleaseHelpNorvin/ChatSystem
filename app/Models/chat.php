<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    protected $fillable = ['from', 'to', 'message'];
}
