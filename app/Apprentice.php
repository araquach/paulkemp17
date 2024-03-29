<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    protected $guarded = ['id'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    protected $connection = 'mysqljak';
}