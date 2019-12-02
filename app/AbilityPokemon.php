<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbilityPokemon extends Model
{
    protected $table = 'ability_pokemon';
    
    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['idability', 'idpokemon'];
    
    
    public function ability() {
        return $this->belongsTo('App\Ability', 'idability');
    }
    
    public function user() {
        return $this->belongsTo('App\Pokemon', 'idpokemon');
    }
}
