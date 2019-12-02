<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    protected $table = 'abilities';
    
    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['ability'];
    
}
