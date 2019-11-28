<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemon';
    
    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['name', 'weight', 'height', 'image'];
}
