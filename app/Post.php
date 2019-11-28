<?php

namespace App;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    
    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['subject', 'idpokemon', 'content', 'iduser'];
    
    // public function setIdLogin($value)
    // {
    //     $value = Auth::id();
    //     $this->attributes['iduser'] = $value;
    // }
    protected static function boot()
    {
        parent::boot();
    
        static::creating(function ($query) {
            $query->iduser = Auth::id();
        });
    }
    
    public function pokemon() {
        return $this->belongsTo('App\Pokemon', 'idpokemon');
    }
    
    public function user() {
        return $this->belongsTo('App\User', 'iduser');
    }
    
}
