<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    
    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['idpost', 'iduser', 'content'];
    
    
    public function post() {
        return $this->belongsTo('App\Post', 'idpost');
    }
    
    public function user() {
        return $this->belongsTo('App\User', 'iduser');
    }
}
